import { Title } from '@angular/platform-browser';
import { ContactService } from './../../services/ContactService';
import { ContactModel } from './../../models/ContactModel';
import { CustomizerService } from './../../services/CustomizerService';
import { Component, OnInit, ViewChild, ElementRef, TestabilityRegistry } from '@angular/core';
import { CustomizerModel } from 'src/app/models/CustomizerModel';
import { NgForm } from '@angular/forms';


@Component({
  selector: 'app-contact',
  templateUrl: './contact.component.html',
  styleUrls: ['./contact.component.scss']
})
export class ContactComponent implements OnInit {
  public Model: CustomizerModel;
  public response: ContactModel;

  @ViewChild('contactform_data' , {static: false}) contactForm: NgForm;
  @ViewChild('map_container', {static: false}) PageContainer: ElementRef;
  @ViewChild('msg' , {static:false}) msg: ElementRef;

  constructor(
    private _customizerService: CustomizerService,
    private _contactService: ContactService,
    private _title: Title
  ) { }

  onSubmit(form: NgForm) {
    if (this.contactForm.valid) {
      this._contactService.SendEmail(form.value).subscribe(
        formdata => {
         this.response = formdata;
        }
      );

      form.resetForm();
      this.msg.nativeElement.style.display = 'block';
    } else {
      this.msg.nativeElement.style.display = 'none';
    }
  }
  
  ngOnInit() {
    this._title.setTitle("Contact");
    this._customizerService.getContactPageContent().subscribe(data=>{

       this.Model = data;
       this.PageContainer.nativeElement.insertAdjacentHTML('beforeend',data.Map);
    })
  }

 

}
