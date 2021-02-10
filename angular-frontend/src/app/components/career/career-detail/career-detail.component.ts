import { CustomizerService } from './../../../services/CustomizerService';
import { Title, Meta } from '@angular/platform-browser';
import { ActivatedRoute } from '@angular/router';
import { CareerService } from './../../../services/CareerService';
import { Component, OnInit, ViewChild, ElementRef } from '@angular/core';
import { CareerModel } from 'src/app/models/CareerModel';
import { CustomizerModel } from 'src/app/models/CustomizerModel';

@Component({
  selector: 'app-career-detail',
  templateUrl: './career-detail.component.html',
  styleUrls: ['./career-detail.component.scss']
})
export class CareerDetailComponent implements OnInit {
  public Model : CareerModel;
  public CustomizeModel: CustomizerModel;
  @ViewChild('page_content', {static:false}) PageContainer: ElementRef;
  constructor(
    private _careerService: CareerService,
    private _customizeService: CustomizerService,
    private route: ActivatedRoute,
    private _title: Title ,
    private _meta: Meta
  ) { }

  ngOnInit() {
    this.route.params.subscribe( routeParams =>
      this._careerService.getCareerDetail(routeParams.url).subscribe(data=>{
       this.Model = data;
       this._title.setTitle(data.MetaTitle);
       this._meta.addTag({ name: 'description', content: data.MetaDescription });
       this.PageContainer.nativeElement.insertAdjacentHTML('beforeend',data.Content);
        })
      );

      this._customizeService.getJobContactInfo().subscribe(data => {
        this.CustomizeModel = data;
      });
  }

}
