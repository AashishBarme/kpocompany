import { PostService } from './../../../services/PostService';
import { Component, OnInit} from '@angular/core';
import { PostModel } from 'src/app/models/PostModel';
import { DomSanitizer } from '@angular/platform-browser';
import { Title } from '@angular/platform-browser';

@Component({
  selector: 'app-post-list',
  templateUrl: './post-list.component.html',
  styleUrls: ['./post-list.component.scss']
})
export class PostListComponent implements OnInit {
  public Model : PostModel;
  
  SafeHtml(html: string ){
    return this._sanitizer.bypassSecurityTrustHtml(html);
  }

  constructor(
    private _postService: PostService,
    protected _sanitizer: DomSanitizer,
    private _title: Title
  ) { }

  ngOnInit() {
   this._postService.getPostsList().subscribe(data => {
      this.Model = data; 
      this._title.setTitle("Blog");
   })
  }

}
