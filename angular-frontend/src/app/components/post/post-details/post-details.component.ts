import { PostModel } from '../../../models/PostModel';
import { PostService } from '../../../services/PostService';
import { Component, OnInit, ViewChild, ElementRef } from '@angular/core';
import { ActivatedRoute } from '@angular/router';
import { Meta, Title } from '@angular/platform-browser';

@Component({
  selector: 'app-post-details',
  templateUrl: './post-details.component.html',
  styleUrls: ['./post-details.component.scss']
})
export class PostDetailsComponent implements OnInit {
  public Model: PostModel;
  @ViewChild('post_container', {static: false}) PageContainer: ElementRef;
  constructor(  
    private _postService : PostService,
    private route: ActivatedRoute,
    private _meta: Meta,
    private _title: Title
  ){}

  ngOnInit() {
    this.route.params.subscribe(routeParams =>
    this._postService.getPostsDetail(routeParams.url).subscribe(data=> {
       this._title.setTitle(data.MetaTitle);
       this._meta.addTag({ name: 'description', content: data.MetaDescription });
       this.Model = data;
       this.PageContainer.nativeElement.insertAdjacentHTML('beforeend', data.Content);
    })
    )
  };

}
