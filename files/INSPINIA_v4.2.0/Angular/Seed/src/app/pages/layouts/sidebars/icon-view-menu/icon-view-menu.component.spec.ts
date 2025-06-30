import { ComponentFixture, TestBed } from '@angular/core/testing';

import { IconViewMenuComponent } from './icon-view-menu.component';

describe('IconViewMenuComponent', () => {
  let component: IconViewMenuComponent;
  let fixture: ComponentFixture<IconViewMenuComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [IconViewMenuComponent]
    })
    .compileComponents();

    fixture = TestBed.createComponent(IconViewMenuComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
