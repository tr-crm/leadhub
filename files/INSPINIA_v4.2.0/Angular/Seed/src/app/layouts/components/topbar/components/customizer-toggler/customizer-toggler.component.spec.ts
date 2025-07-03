import { ComponentFixture, TestBed } from '@angular/core/testing';

import { CustomizerTogglerComponent } from './customizer-toggler.component';

describe('CustomizerTogglerComponent', () => {
  let component: CustomizerTogglerComponent;
  let fixture: ComponentFixture<CustomizerTogglerComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [CustomizerTogglerComponent]
    })
    .compileComponents();

    fixture = TestBed.createComponent(CustomizerTogglerComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
