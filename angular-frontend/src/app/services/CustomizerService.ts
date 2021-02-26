import { Observable } from 'rxjs';
import { map } from 'rxjs/operators';
import { HttpClient } from '@angular/common/http';
import { CustomizerModel } from './../models/CustomizerModel';
import { Injectable } from '@angular/core';
import { ApiEndPoints } from '../config/Config';
@Injectable({
    providedIn: 'root'
})
export class CustomizerService{
    constructor(
        private http: HttpClient
    ){}

    public getHomeBannerContent(): Observable<CustomizerModel>{
        return this.http.get<CustomizerModel>(ApiEndPoints.customizer).pipe(
            map(
                (data:any) =>{
                    const customizerModel = new CustomizerModel;
                    customizerModel.BannerTitle = data.BannerTitle;
                    customizerModel.BannerImage = data.BannerImage;
                    customizerModel.HomeSeoTitle = data.HomeSeoTitle;
                    customizerModel.HomeMetaDesc = data.HomeMetaDesc;
                    return customizerModel;
                }
            )
        )
    }

    public getContactPageContent(): Observable<CustomizerModel>{
        return this.http.get<CustomizerModel>(ApiEndPoints.customizer).pipe(
            map(
                (data: any) =>{
                    const customizerModel = new CustomizerModel;
                    customizerModel.Map = data.Map;
                    customizerModel.Location = data.Location;
                    customizerModel.PhoneNumber = data.PhoneNumber;
                    customizerModel.Mail = data.Mail;

                    return customizerModel;
                }
            )
        )
    }

    public getHeaderLogoDetails(): Observable<CustomizerModel>{
        return this.http.get<CustomizerModel>(ApiEndPoints.customizer).pipe(
            map(
                (data: any) => {
                    const customizerModel = new CustomizerModel;
                    customizerModel.WebsiteName = data.WebsiteName;
                    customizerModel.LogoUrl = data.LogoUrl;
                    return customizerModel;
                }
            )
        )
    }

    public getJobContactInfo(): Observable<CustomizerModel>{
        return this.http.get<CustomizerModel>(ApiEndPoints.customizer).pipe(
            map(
                (data: any) =>{
                    const customizerModel = new CustomizerModel;
                    customizerModel.JobMail = data.JobMail;
                    return customizerModel;
                }
            )
        )
    }

    public getHomeFaqImage(): Observable<CustomizerModel>{
        return this.http.get<CustomizerModel>(ApiEndPoints.customizer).pipe(
            map(
                (data: any) =>{
                    const customizerModel = new CustomizerModel;
                    customizerModel.HomeFaqImage = data.HomeFaqImage;
                    return customizerModel;
                }
            )
        )
    }
    
}