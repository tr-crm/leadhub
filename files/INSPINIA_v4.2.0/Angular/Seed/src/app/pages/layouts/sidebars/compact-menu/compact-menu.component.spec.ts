import { ComponentFixture, TestBed } from '@angular/core/testing';

import { CompactMenuComponent } from './compact-menu.component';

describe('CompactMenuComponent', () => {
  let component: CompactMenuComponent;
  let fixture: ComponentFixture<CompactMenuComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [CompactMenuComponent]
    })
    .compileComponents();

    fixture = TestBed.createComponent(CompactMenuComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
