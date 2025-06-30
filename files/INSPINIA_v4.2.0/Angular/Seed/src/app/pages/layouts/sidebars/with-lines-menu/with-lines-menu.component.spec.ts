import { ComponentFixture, TestBed } from '@angular/core/testing';

import { WithLinesMenuComponent } from './with-lines-menu.component';

describe('WithLinesMenuComponent', () => {
  let component: WithLinesMenuComponent;
  let fixture: ComponentFixture<WithLinesMenuComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [WithLinesMenuComponent]
    })
    .compileComponents();

    fixture = TestBed.createComponent(WithLinesMenuComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
