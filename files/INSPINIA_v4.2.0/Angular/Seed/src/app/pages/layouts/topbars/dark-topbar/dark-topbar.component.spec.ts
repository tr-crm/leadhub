import { ComponentFixture, TestBed } from '@angular/core/testing';

import { DarkTopbarComponent } from './dark-topbar.component';

describe('DarkTopbarComponent', () => {
  let component: DarkTopbarComponent;
  let fixture: ComponentFixture<DarkTopbarComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [DarkTopbarComponent]
    })
    .compileComponents();

    fixture = TestBed.createComponent(DarkTopbarComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
