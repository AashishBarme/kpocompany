import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { DynamicPostComponent } from './dynamic-post.component';

describe('DynamicPostComponent', () => {
  let component: DynamicPostComponent;
  let fixture: ComponentFixture<DynamicPostComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ DynamicPostComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(DynamicPostComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
