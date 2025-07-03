import { ComponentFixture, TestBed } from '@angular/core/testing';

import { NewPwComponent } from './new-pw.component';

describe('NewPwComponent', () => {
  let component: NewPwComponent;
  let fixture: ComponentFixture<NewPwComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [NewPwComponent]
    })
    .compileComponents();

    fixture = TestBed.createComponent(NewPwComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
