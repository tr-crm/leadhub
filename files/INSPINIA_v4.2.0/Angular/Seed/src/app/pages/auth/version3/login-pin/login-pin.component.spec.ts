import { ComponentFixture, TestBed } from '@angular/core/testing';

import { LoginPinComponent } from './login-pin.component';

describe('LoginPinComponent', () => {
  let component: LoginPinComponent;
  let fixture: ComponentFixture<LoginPinComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [LoginPinComponent]
    })
    .compileComponents();

    fixture = TestBed.createComponent(LoginPinComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
