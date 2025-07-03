import { ComponentFixture, TestBed } from '@angular/core/testing';

import { GrayTopbarComponent } from './gray-topbar.component';

describe('GrayTopbarComponent', () => {
  let component: GrayTopbarComponent;
  let fixture: ComponentFixture<GrayTopbarComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [GrayTopbarComponent]
    })
    .compileComponents();

    fixture = TestBed.createComponent(GrayTopbarComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
