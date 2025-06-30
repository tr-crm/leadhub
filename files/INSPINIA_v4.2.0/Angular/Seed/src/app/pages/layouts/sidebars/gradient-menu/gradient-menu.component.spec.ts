import { ComponentFixture, TestBed } from '@angular/core/testing';

import { GradientMenuComponent } from './gradient-menu.component';

describe('GradientMenuComponent', () => {
  let component: GradientMenuComponent;
  let fixture: ComponentFixture<GradientMenuComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [GradientMenuComponent]
    })
    .compileComponents();

    fixture = TestBed.createComponent(GradientMenuComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
