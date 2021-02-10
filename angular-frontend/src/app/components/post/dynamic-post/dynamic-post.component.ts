import { ActivatedRoute } from '@angular/router';
import { PostService } from './../../../services/PostService';
import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-dynamic-post',
  templateUrl: './dynamic-post.component.html',
  styleUrls: ['./dynamic-post.component.scss']
})
export class DynamicPostComponent implements OnInit {
  public Model: any;
  constructor(
    private _postService: PostService,
    private route: ActivatedRoute
  ) { }

  ngOnInit() {
      this.route.params.subscribe(routeParams=>{
         this._postService.getPostsDetail(routeParams.url).subscribe(data=>{
           this.Model = data;
         })
      })
  }

}
