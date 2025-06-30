import { ComponentFixture, TestBed } from '@angular/core/testing';

import { OnHoverMenuComponent } from './on-hover-menu.component';

describe('OnHoverMenuComponent', () => {
  let component: OnHoverMenuComponent;
  let fixture: ComponentFixture<OnHoverMenuComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [OnHoverMenuComponent]
    })
    .compileComponents();

    fixture = TestBed.createComponent(OnHoverMenuComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
