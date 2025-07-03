import { ComponentFixture, TestBed } from '@angular/core/testing';

import { BoxedComponent } from './boxed.component';

describe('BoxedComponent', () => {
  let component: BoxedComponent;
  let fixture: ComponentFixture<BoxedComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [BoxedComponent]
    })
    .compileComponents();

    fixture = TestBed.createComponent(BoxedComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
