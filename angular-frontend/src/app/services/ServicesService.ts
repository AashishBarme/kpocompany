import { Observable } from 'rxjs';
import { HttpClient } from '@angular/common/http';
import { Injectable } from '@angular/core';
import { PostModel } from '../models/PostModel';
import { ApiEndPoints } from '../config/Config';
import { map } from 'rxjs/operators';

@Injectable({
    providedIn: 'root'
})
export class ServicesService{
    constructor(
        private http: HttpClient
    ){}

    public getServiceDetails(slug: string): Observable<PostModel>{
        return this.http.get<PostModel>(ApiEndPoints.services +'/'+ slug).pipe(
           map(
            (data:any)=> {
                const serviceModel =  new PostModel;
                serviceModel.Title = data.Title;
                serviceModel.Slug = data.Slug;
                serviceModel.Content = data.Content;
                serviceModel.MetaTitle = data.MetaTitle;
                serviceModel.MetaDescription = data.MetaDescription;
                return serviceModel;
            }
           )
        )
    }
}