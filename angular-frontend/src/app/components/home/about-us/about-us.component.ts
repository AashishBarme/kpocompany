import { PostModel } from 'src/app/models/PostModel';
import { HomeService } from './../../../services/HomeService';
import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-about-us',
  templateUrl: './about-us.component.html',
  styleUrls: ['./about-us.component.scss']
})
export class AboutUsComponent implements OnInit {
  public Model:  PostModel;
  constructor(
    private _homeService : HomeService
  ) { }

  ngOnInit() {
    this._homeService.getAboutUsDetail().subscribe(data =>{
      this.Model = data;
      }
    )
  }

}
