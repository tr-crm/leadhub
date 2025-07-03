import { Component } from '@angular/core';
import { CtaComponent } from "./components/cta/cta.component";
import { FeaturesComponent } from "./components/features/features.component";
import { HeaderComponent } from "./components/header/header.component";
import { HeroComponent } from "./components/hero/hero.component";
import { PricingPlansComponent } from "./components/pricing-plans/pricing-plans.component";
import { ServicesComponent } from "./components/services/services.component";
import { TestimonialsComponent } from "./components/testimonials/testimonials.component";
import { BlogsComponent } from "./components/blogs/blogs.component";
import { ContactComponent } from "./components/contact/contact.component";
import { FooterComponent } from './components/footer/footer.component';

@Component({
  selector: 'app-landing',
  imports: [HeaderComponent, HeroComponent, ServicesComponent, FeaturesComponent, PricingPlansComponent, CtaComponent, TestimonialsComponent, BlogsComponent, ContactComponent, FooterComponent],
  templateUrl: './landing.component.html',
  styles: ``
})
export class LandingComponent {

}
