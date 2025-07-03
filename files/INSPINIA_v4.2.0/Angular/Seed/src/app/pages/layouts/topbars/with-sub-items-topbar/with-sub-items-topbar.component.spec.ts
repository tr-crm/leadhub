import { ComponentFixture, TestBed } from '@angular/core/testing';

import { WithSubItemsTopbarComponent } from './with-sub-items-topbar.component';

describe('WithSubItemsTopbarComponent', () => {
  let component: WithSubItemsTopbarComponent;
  let fixture: ComponentFixture<WithSubItemsTopbarComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [WithSubItemsTopbarComponent]
    })
    .compileComponents();

    fixture = TestBed.createComponent(WithSubItemsTopbarComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
