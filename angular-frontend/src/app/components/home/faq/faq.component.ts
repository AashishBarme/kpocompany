import { CustomizerModel } from 'src/app/models/CustomizerModel';
import { CustomizerService } from './../../../services/CustomizerService';
import { PostModel } from 'src/app/models/PostModel';
import { HomeService } from './../../../services/HomeService';
import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-faq',
  templateUrl: './faq.component.html',
  styleUrls: ['./faq.component.scss']
})
export class FaqComponent implements OnInit {
  public Model: PostModel;
  public customizerModel: CustomizerModel;
  constructor(
    private _homeService : HomeService,
    private _customizerService: CustomizerService
  ) { }

  ngOnInit() {
    this._homeService.getFAQList().subscribe( data =>{
      this.Model = data;
    });

    this._customizerService.getHomeFaqImage().subscribe(data => {
      this.customizerModel = data;
    })

  }

}
