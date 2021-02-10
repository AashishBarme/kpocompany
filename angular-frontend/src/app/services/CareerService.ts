import { Observable } from 'rxjs';
import { CareerModel } from './../models/CareerModel';
import { HttpClient } from '@angular/common/http';
import { Injectable } from '@angular/core';
import { ApiEndPoints } from '../config/Config';
import { map } from 'rxjs/operators';
declare function DateFormat(date: string): any;

@Injectable({
    providedIn: 'root'
})

export class CareerService{
    public Model: CareerModel;

    constructor(
      private http: HttpClient
    ){}  
    
    public getCareerDetail(slug: string): Observable<CareerModel>{
        return this.http.get<CareerModel>(ApiEndPoints.careers + '/'+ slug).pipe(
            map(
                (data:any) => {
                    const careerModel = new CareerModel;
                    careerModel.Title = data.Title;
                    careerModel.Slug = data.Slug;
                    careerModel.JobType = data.Categories;
                    careerModel.Date = DateFormat(data.ModifiedDate);
                    careerModel.Content = data.Content;
                    careerModel.MetaTitle = data.MetaTitle;
                    careerModel.MetaDescription = data.MetaDescription;
                    return careerModel;
                }
            )
        )
    }


    public getCarrerList(): Observable<CareerModel>{
        return this.http.get<CareerModel>(ApiEndPoints.default + 'career-listing').pipe(
            map(
                (data:any) => data.map ( 
                    (item:any) =>{ 
                    const careerModel = new CareerModel;
                    careerModel.Title = item.Title;
                    careerModel.Slug = item.Slug;
                    careerModel.JobType = item.Categories;
                    careerModel.Date = DateFormat(item.Modified);
                    careerModel.Excerpt = item.Excerpt;
                    return careerModel;
                }
                )
            )
        )
    }
}