import { ComponentFixture, TestBed } from '@angular/core/testing';

import { NoIconsWithLinesMenuComponent } from './no-icons-with-lines-menu.component';

describe('NoIconsWithLinesMenuComponent', () => {
  let component: NoIconsWithLinesMenuComponent;
  let fixture: ComponentFixture<NoIconsWithLinesMenuComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [NoIconsWithLinesMenuComponent]
    })
    .compileComponents();

    fixture = TestBed.createComponent(NoIconsWithLinesMenuComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
