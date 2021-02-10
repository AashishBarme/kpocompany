import { Title, Meta } from '@angular/platform-browser';
import { PostModel } from './../../../models/PostModel';
import { ServicesService } from './../../../services/ServicesService';
import { ActivatedRoute } from '@angular/router';
import { Component, OnInit, ViewChild, ElementRef } from '@angular/core';

@Component({
  selector: 'app-service-details',
  templateUrl: './service-details.component.html',
  styleUrls: ['./service-details.component.scss']
})
export class ServiceDetailsComponent implements OnInit {
  public Model: PostModel;
  @ViewChild('post_container', {static: false}) PageContainer: ElementRef;
  constructor(
    private route: ActivatedRoute,
    private _service : ServicesService,
    private _title : Title,
    private _meta: Meta
  ) { }

  ngOnInit() {
    this.route.params.subscribe(routeParams =>
      this._service.getServiceDetails(routeParams.url).subscribe(data=> {
         this.Model = data;
         this.PageContainer.nativeElement.insertAdjacentHTML('beforeend', data.Content);
         this._title.setTitle(data.MetaTitle);
         this._meta.addTag({ name: 'description', content: data.MetaDescription });
      })
    )
  }

}
