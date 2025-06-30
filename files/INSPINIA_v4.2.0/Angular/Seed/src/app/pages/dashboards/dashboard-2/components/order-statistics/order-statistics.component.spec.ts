import { ComponentFixture, TestBed } from '@angular/core/testing';

import { OrderStatisticsComponent } from './order-statistics.component';

describe('OrderStatisticsComponent', () => {
  let component: OrderStatisticsComponent;
  let fixture: ComponentFixture<OrderStatisticsComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [OrderStatisticsComponent]
    })
    .compileComponents();

    fixture = TestBed.createComponent(OrderStatisticsComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
