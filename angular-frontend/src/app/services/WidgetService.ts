import { WidgetModel } from './../models/WidgetModel';
import { Observable } from 'rxjs';
import { HttpClient } from '@angular/common/http';
import { Injectable } from '@angular/core';
import { ApiEndPoints } from '../config/Config';
import { map } from 'rxjs/operators';
@Injectable({
    providedIn: 'root'
})

export class WidgetService{
    constructor(
        private http: HttpClient
    ){}
    public getWidgetDetails(id: string): Observable<WidgetModel>
    {
       return this.http.get<WidgetModel>(ApiEndPoints.widget + '/' + id).pipe(
           map(
               (data:any) => {
                   return data;
               }
           )
       )  
    }
}