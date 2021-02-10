import { PostService } from './../../../services/PostService';
import { ActivatedRoute } from '@angular/router';
import { Component, OnInit, ViewChild, ElementRef } from '@angular/core';
import { PostModel } from 'src/app/models/PostModel';
import { Meta, Title } from '@angular/platform-browser';

@Component({
  selector: 'app-page-details',
  templateUrl: './page-details.component.html',
  styleUrls: ['./page-details.component.scss']
})
export class PageDetailsComponent implements OnInit {
  public Model : PostModel;
  @ViewChild('page_container', {static: false}) PageContainer: ElementRef;
  constructor(
    private _postService: PostService,
    private route: ActivatedRoute,
    private _meta: Meta,
    private _title: Title
  ) { }

  ngOnInit() {
    this.route.params.subscribe(routeParams =>
      this._postService.getPostsDetail(routeParams.url).subscribe(data=> {
        this.Model = data;
        this.PageContainer.nativeElement.insertAdjacentHTML('beforeend', data.Content);
        this._title.setTitle(data.MetaTitle);
        this._meta.addTag({ name: 'description', content: data.MetaDescription });
     }) 
    )
  }

}
