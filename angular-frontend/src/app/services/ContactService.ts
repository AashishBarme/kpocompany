import { ContactModel } from './../models/ContactModel';
import { HttpClient, HttpHeaders } from '@angular/common/http';
import { Injectable } from '@angular/core';
import { map } from 'rxjs/operators';
import { ApiEndPoints } from '../config/Config';

@Injectable({
  providedIn: 'root'
})
export class ContactService {
  errorData: {};
  httpOptions = {
    headers: new HttpHeaders({'Content-Type': 'application/json'})
  };

  constructor(private http: HttpClient) { }

  public SendEmail(formdata: ContactModel) {
      console.log(formdata);
    return this.http.post<ContactModel>(ApiEndPoints.contact, formdata, this.httpOptions).pipe(
      map(data => {
        return data;
      })
    );
  }

}
