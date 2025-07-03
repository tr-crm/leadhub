import { ComponentFixture, TestBed } from '@angular/core/testing';

import { ImageMenuComponent } from './image-menu.component';

describe('ImageMenuComponent', () => {
  let component: ImageMenuComponent;
  let fixture: ComponentFixture<ImageMenuComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [ImageMenuComponent]
    })
    .compileComponents();

    fixture = TestBed.createComponent(ImageMenuComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
