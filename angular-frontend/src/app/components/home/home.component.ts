import { CustomizerService } from './../../services/CustomizerService';
import { Component, OnInit } from '@angular/core';
import { CustomizerModel } from 'src/app/models/CustomizerModel';
import { Title, Meta } from '@angular/platform-browser';

@Component({
  selector: 'app-home',
  templateUrl: './home.component.html',
  styleUrls: ['./home.component.scss']
})
export class HomeComponent implements OnInit {
  public Model: CustomizerModel;
  constructor(
    private _customizerService: CustomizerService,
    private _title: Title,
    private _meta: Meta
  ) { }

  ngOnInit() {
    this._customizerService.getHomeBannerContent().subscribe(data => {
      this.Model = data;
      this._title.setTitle(data.HomeSeoTitle);
      this._meta.addTag({ name: 'description', content: data.HomeMetaDesc });
    });
  }

}
