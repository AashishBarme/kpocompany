import { CustomizerService } from './../../../services/CustomizerService';
import { CustomizerModel } from 'src/app/models/CustomizerModel';
import { NavBarModel } from './../../../models/NavbarModel';
import { ActivatedRoute } from '@angular/router';
import { Component, OnInit } from '@angular/core';
import { NavbarService } from 'src/app/services/NavbarService';

declare const menuOpen: any;
declare const submenuDisplay: any;
@Component({
  selector: 'app-header',
  templateUrl: './header.component.html',
  styleUrls: ['./header.component.scss']
})
export class HeaderComponent implements OnInit {

  public Menu : NavBarModel;
  public Logo: CustomizerModel;
  constructor(
    private _navbarService : NavbarService,
    private _customizerService: CustomizerService,
    private route : ActivatedRoute
  ) { }
  
  onClickMenu() {
    menuOpen();
  }
  onShowDropDownMobileMenu(){
    submenuDisplay();
  }

  ngOnInit() {

    if(sessionStorage.getItem('menu') == null) {
      this._navbarService.getNavbarDetails().subscribe(data=>{
        this.Menu = data;
        sessionStorage.setItem('menu',JSON.stringify(data));
      });
    }
    else {
      this.Menu = JSON.parse(sessionStorage.getItem('menu'));
    } 
    
    this._customizerService.getHeaderLogoDetails().subscribe(data => {
      this.Logo = data;
    });


  }
}
