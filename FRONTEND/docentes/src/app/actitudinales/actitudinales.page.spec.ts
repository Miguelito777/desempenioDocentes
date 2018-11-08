import { CUSTOM_ELEMENTS_SCHEMA } from '@angular/core';
import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { ActitudinalesPage } from './actitudinales.page';

describe('ActitudinalesPage', () => {
  let component: ActitudinalesPage;
  let fixture: ComponentFixture<ActitudinalesPage>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ ActitudinalesPage ],
      schemas: [CUSTOM_ELEMENTS_SCHEMA],
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(ActitudinalesPage);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
