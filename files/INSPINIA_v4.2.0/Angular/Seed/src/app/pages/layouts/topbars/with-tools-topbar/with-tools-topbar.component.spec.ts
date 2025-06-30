import { ComponentFixture, TestBed } from '@angular/core/testing';

import { WithToolsTopbarComponent } from './with-tools-topbar.component';

describe('WithToolsTopbarComponent', () => {
  let component: WithToolsTopbarComponent;
  let fixture: ComponentFixture<WithToolsTopbarComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [WithToolsTopbarComponent]
    })
    .compileComponents();

    fixture = TestBed.createComponent(WithToolsTopbarComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
