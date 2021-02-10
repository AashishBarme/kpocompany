import { Observable } from 'rxjs';
import { PostModel } from './../models/PostModel';
import { HttpClient } from '@angular/common/http';
import { Injectable } from '@angular/core';
import { ApiEndPoints } from '../config/Config';
import { map } from 'rxjs/operators';
@Injectable({
    providedIn: 'root'
})

export class HomeService{
    public PostModel: PostModel;
    constructor(
        private http: HttpClient
    ){}
    
    public getAboutUsDetail(): Observable<PostModel>{
        return this.http.get<PostModel>(ApiEndPoints.homeaboutus).pipe(
            map(
                (data:any) => {
                   const aboutUsModel = new PostModel;
                   aboutUsModel.Title = data.Title;
                   aboutUsModel.Slug = data.Slug;
                   aboutUsModel.Excerpt = data.Excerpt;
                   aboutUsModel.ImageUrl = data.ImageUrl;
                   return aboutUsModel;

                })
            )
    }


    public getFAQList(): Observable<PostModel>{
        return this.http.get<PostModel>(ApiEndPoints.homefaq).pipe(
            map(
                (data:any) => data.map(
                    (item:any) => {
                        const faqModel = new PostModel;
                        faqModel.Title = item.Title;
                        faqModel.Content = item.Content;
                        faqModel.Slug = item.Slug;
                        return faqModel;
                    }
                )
            )
        )
    }

    public getServiceList() : Observable<PostModel>{
        return this.http.get<PostModel>(ApiEndPoints.homeservices).pipe(
            map(
                (data:any) => data.map(
                    (item:any) => {
                        const serviceModel = new PostModel;
                        serviceModel.Title = item.Title;
                        serviceModel.Excerpt = item.Excerpt;
                        serviceModel.ImageUrl = item.ImageUrl;
                        serviceModel.Slug = item.Slug;
                        return serviceModel;
                    }
                )
            )
        )
    }
    
}