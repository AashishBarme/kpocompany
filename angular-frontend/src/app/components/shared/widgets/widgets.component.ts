import { WidgetService } from './../../../services/WidgetService';
import { Component, OnInit, Input, ViewChild, ElementRef } from '@angular/core';
import { WidgetModel } from 'src/app/models/WidgetModel';
import { DomSanitizer } from '@angular/platform-browser';

@Component({
  selector: 'app-widgets',
  templateUrl: './widgets.component.html',
  styleUrls: ['./widgets.component.scss']
})
export class WidgetsComponent implements OnInit {
  @Input() widgetID : string;
  @ViewChild('widget_container', {static: false}) WidgetContainer: ElementRef;
  safeHtml(html: any) {
    return this._sanitizer.bypassSecurityTrustHtml(html);
  }
  public WidgetContain : WidgetModel;
  constructor(
    private _widgetService : WidgetService,
    protected _sanitizer: DomSanitizer
  ) { }

  ngOnInit() {
    if(sessionStorage.getItem(this.widgetID) == null)
    {
      this._widgetService.getWidgetDetails(this.widgetID).subscribe(data=>{
        this.WidgetContain = data; 
        sessionStorage.setItem(this.widgetID,JSON.stringify(data));
      })
    } else {
      var sessionData = JSON.parse(sessionStorage.getItem(this.widgetID));
      this.WidgetContain = sessionData;
    }
  }

}
