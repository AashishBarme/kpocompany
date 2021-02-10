import { Component, OnInit, ViewChild, ElementRef } from '@angular/core';
import { CareerService } from 'src/app/services/CareerService';
import { DomSanitizer, Title } from '@angular/platform-browser';


@Component({
  selector: 'app-career-list',
  templateUrl: './career-list.component.html',
  styleUrls: ['./career-list.component.scss']
})
export class CareerListComponent implements OnInit {
  public Model: any;
  safeHtml(html: string) {
    return this._sanitizer.bypassSecurityTrustHtml(html);
  }

  constructor(
    private _careerService: CareerService,
    protected _sanitizer: DomSanitizer,
    private _title : Title
  ) { }

  ngOnInit() {
    this._careerService.getCarrerList().subscribe( data => {
      this.Model = data;
      this._title.setTitle("Careers");
    })   
  }

}
