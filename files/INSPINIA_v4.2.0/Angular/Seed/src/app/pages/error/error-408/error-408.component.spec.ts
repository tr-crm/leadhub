import { ComponentFixture, TestBed } from '@angular/core/testing';

import { Error408Component } from './error-408.component';

describe('Error408Component', () => {
  let component: Error408Component;
  let fixture: ComponentFixture<Error408Component>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [Error408Component]
    })
    .compileComponents();

    fixture = TestBed.createComponent(Error408Component);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
