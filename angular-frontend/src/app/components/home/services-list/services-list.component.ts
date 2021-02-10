import { PostModel } from 'src/app/models/PostModel';
import { HomeService } from './../../../services/HomeService';
import { Component, OnInit } from '@angular/core';
import { OwlOptions } from 'ngx-owl-carousel-o';

@Component({
  selector: 'app-services-list',
  templateUrl: './services-list.component.html',
  styleUrls: ['./services-list.component.scss']
})
export class ServicesListComponent implements OnInit {
  public Model: PostModel;
  constructor(
    private _homeService: HomeService
  ) { }
  customOptions: OwlOptions = {
    loop:true,
    margin:40,
  items:1,
  autoplay:true,
    nav:false,
  dots:true,
  autoplayHoverPause: true,
  autoplaySpeed: 400,
    responsive:{
        0:{
            items:1,
            nav:false
        },
        767:{
            items:2,
        },
        992:{
            items:3
        },
        1200:{
            items:3
        },
        1500:{
            items:3
        }
    }
  }

  ngOnInit() {
    this._homeService.getServiceList().subscribe(data=>{
       this.Model = data;
    })
  }

}
