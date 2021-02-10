import {  Injectable } from '@angular/core';
import { NavBarModel } from './../models/NavbarModel';
import { HttpClient } from '@angular/common/http';
import { Observable } from 'rxjs';
import { map } from 'rxjs/operators';
import { ApiEndPoints } from '../config/Config';
@Injectable({
    providedIn: 'root'
})


export class NavbarService{
    public Model: NavBarModel;
    constructor(
        private http: HttpClient
    ){}
        
    public getNavbarDetails(): Observable<NavBarModel>{
        return this.http.get<NavBarModel>(ApiEndPoints.navbar).pipe(
            map(
                (data:any) => data.map(
                    (item:any) => {
                   const navbarModel = new NavBarModel;
                   navbarModel.Title = item.Title;
                   navbarModel.Link = item.Slug;
                   navbarModel.ChildMenu = item.ChildMenu;
                   return navbarModel;
                })
            )
        )
    }

}