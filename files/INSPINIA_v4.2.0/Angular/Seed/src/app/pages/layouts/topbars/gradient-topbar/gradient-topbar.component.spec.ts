import { ComponentFixture, TestBed } from '@angular/core/testing';

import { GradientTopbarComponent } from './gradient-topbar.component';

describe('GradientTopbarComponent', () => {
  let component: GradientTopbarComponent;
  let fixture: ComponentFixture<GradientTopbarComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [GradientTopbarComponent]
    })
    .compileComponents();

    fixture = TestBed.createComponent(GradientTopbarComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
