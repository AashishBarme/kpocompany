import {  Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Observable } from 'rxjs';
import { map } from 'rxjs/operators';
import { PostModel } from '../models/PostModel';
import { ApiEndPoints } from '../config/Config';

declare function DateFormat(date: string): any;
@Injectable({
    providedIn: 'root'
})

export class PostService{
    constructor(private http: HttpClient){}
    /**
     * Get Post details of the post
     * @param slug string
     * @returns object
     */
    public getPostsDetail(slug: string): Observable<PostModel>{
        return this.http.get<PostModel>(ApiEndPoints.default + slug ).pipe(
            map( 
                (data:any) =>  {
                    const postModel = new PostModel();
                    postModel.Title = data.Title;
                    postModel.Slug = data.Slug;
                    postModel.Excerpt = data.Excerpt;
                    postModel.Content = data.Content;
                    postModel.ModifiedDate = DateFormat(data.ModifiedDate);
                    postModel.PostType = data.PostType;
                    postModel.ImageUrl = data.ImageUrl;
                    postModel.Categories = data.Categories;
                    postModel.MetaTitle = data.MetaTitle;
                    postModel.MetaDescription = data.MetaDescription;
                    
                    return postModel;
                }
            )
        ); 
    }
    /**
     * Get Post List
     * @returns object
     */ 
    public getPostsList(): Observable<PostModel>{
        return this.http.get<PostModel>(ApiEndPoints.default + 'post-listing').pipe(
            map(
                (data:any) => data.map (
                    (item:any) => {
                    const postModel = new PostModel;
                    postModel.Title = item.Title;
                    postModel.Slug = item.Slug;
                    postModel.ModifiedDate = DateFormat(item.ModifiedDate);
                    postModel.Excerpt = item.Excerpt;
                    postModel.PostImage = item.ImageUrl;
                    postModel.Categories = item.Categories; 
                    return postModel;
                    }
                )
            )
        )
    }
}