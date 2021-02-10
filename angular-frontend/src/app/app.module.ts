import { CarouselModule } from 'ngx-owl-carousel-o';
import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { HttpClientModule } from '@angular/common/http';
import { BrowserAnimationsModule } from '@angular/platform-browser/animations';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { PostDetailsComponent } from './components/post/post-details/post-details.component';
import { PageDetailsComponent } from './components/post/page-details/page-details.component';
import { HeaderComponent } from './components/shared/header/header.component';
import { FooterComponent } from './components/shared/footer/footer.component';
import { HomeComponent } from './components/home/home.component';
import { ServicesListComponent } from './components/home/services-list/services-list.component';
import { FaqComponent } from './components/home/faq/faq.component';
import { AboutUsComponent } from './components/home/about-us/about-us.component';
import { WidgetsComponent } from './components/shared/widgets/widgets.component';
import { PostListComponent } from './components/post/post-list/post-list.component';
import { CareerListComponent } from './components/career/career-list/career-list.component';
import { CareerDetailComponent } from './components/career/career-detail/career-detail.component';
import { DynamicPostComponent } from './components/post/dynamic-post/dynamic-post.component';
import { ServiceDetailsComponent } from './components/service/service-details/service-details.component';
import { ContactComponent } from './components/contact/contact.component';
import { FormsModule } from '@angular/forms';


@NgModule({
  declarations: [
    AppComponent,
    PostDetailsComponent,
    PageDetailsComponent,
    HeaderComponent,
    FooterComponent,
    HomeComponent,
    ServicesListComponent,
    FaqComponent,
    AboutUsComponent,
    WidgetsComponent,
    PostListComponent,
    CareerListComponent,
    CareerDetailComponent,
    DynamicPostComponent,
    ServiceDetailsComponent,
    ContactComponent
  ],
  imports: [
    BrowserModule.withServerTransition({ appId: 'serverApp' }),
    AppRoutingModule,
    HttpClientModule,
    BrowserAnimationsModule,
    CarouselModule,
    FormsModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
