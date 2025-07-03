import { ComponentFixture, TestBed } from '@angular/core/testing';

import { SuccessMailComponent } from './success-mail.component';

describe('SuccessMailComponent', () => {
  let component: SuccessMailComponent;
  let fixture: ComponentFixture<SuccessMailComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [SuccessMailComponent]
    })
    .compileComponents();

    fixture = TestBed.createComponent(SuccessMailComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
