import { ComponentFixture, TestBed } from '@angular/core/testing';

import { OnHoverActiveMenuComponent } from './on-hover-active-menu.component';

describe('OnHoverActiveMenuComponent', () => {
  let component: OnHoverActiveMenuComponent;
  let fixture: ComponentFixture<OnHoverActiveMenuComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [OnHoverActiveMenuComponent]
    })
    .compileComponents();

    fixture = TestBed.createComponent(OnHoverActiveMenuComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
