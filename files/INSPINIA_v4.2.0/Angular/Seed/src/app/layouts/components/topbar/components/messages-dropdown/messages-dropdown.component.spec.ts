import { ComponentFixture, TestBed } from '@angular/core/testing';

import { MessagesDropdownComponent } from './messages-dropdown.component';

describe('MessagesDropdownComponent', () => {
  let component: MessagesDropdownComponent;
  let fixture: ComponentFixture<MessagesDropdownComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [MessagesDropdownComponent]
    })
    .compileComponents();

    fixture = TestBed.createComponent(MessagesDropdownComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
