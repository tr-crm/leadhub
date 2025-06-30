import { ComponentFixture, TestBed } from '@angular/core/testing';

import { StatisticsWidgetComponent } from './statistics-widget.component';

describe('StatisticsWidgetComponent', () => {
  let component: StatisticsWidgetComponent;
  let fixture: ComponentFixture<StatisticsWidgetComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [StatisticsWidgetComponent]
    })
    .compileComponents();

    fixture = TestBed.createComponent(StatisticsWidgetComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
