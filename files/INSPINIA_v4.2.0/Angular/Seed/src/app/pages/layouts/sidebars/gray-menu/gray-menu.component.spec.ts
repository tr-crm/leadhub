import { ComponentFixture, TestBed } from '@angular/core/testing';

import { GrayMenuComponent } from './gray-menu.component';

describe('GrayMenuComponent', () => {
  let component: GrayMenuComponent;
  let fixture: ComponentFixture<GrayMenuComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [GrayMenuComponent]
    })
    .compileComponents();

    fixture = TestBed.createComponent(GrayMenuComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
