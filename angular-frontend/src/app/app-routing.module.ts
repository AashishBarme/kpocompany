import { ContactComponent } from './components/contact/contact.component';
import { DynamicPostComponent } from './components/post/dynamic-post/dynamic-post.component';
import { PostListComponent } from './components/post/post-list/post-list.component';
import { HomeComponent } from './components/home/home.component';
import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { CareerListComponent } from './components/career/career-list/career-list.component';
import { CareerDetailComponent } from './components/career/career-detail/career-detail.component';
import { ServiceDetailsComponent } from './components/service/service-details/service-details.component';


const routes: Routes = [
  { path: '', component: HomeComponent },
  { path: 'blog', component: PostListComponent},
  { path: 'contact', component: ContactComponent},
  { path: 'careers', component: CareerListComponent},
  { path: 'careers/:url', component: CareerDetailComponent},
  { path: 'services/:url', component: ServiceDetailsComponent},
  { path: ':url', component: DynamicPostComponent}
  
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
