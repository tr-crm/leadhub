import { Injectable } from '@angular/core';
import { Router, NavigationEnd } from '@angular/router';
import { filter } from 'rxjs/operators';

@Injectable({
    providedIn: 'root',
})
export class ScrollService {
    activeSection = '';
    sections: string[] = [];

    constructor(private router: Router) {
        this.listenForFragmentScroll();
        this.listenForManualScroll();
    }

    setSections(sectionIds: string[]) {
        this.sections = sectionIds;
    }

    scrollTo(sectionId: string) {
        this.activeSection = sectionId;
        this.router.navigate([], { fragment: sectionId.toLowerCase().replace(/\s+/g, '-') });
    }

    private listenForFragmentScroll() {
        this.router.events
            .pipe(filter(event => event instanceof NavigationEnd))
            .subscribe(() => {
                const fragment = window.location.hash.replace('#', '');
                if (fragment) {
                    this.activeSection = fragment;
                    setTimeout(() => {
                        document.getElementById(fragment)?.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start',
                        });
                    }, 100);
                }
            });
    }

    private listenForManualScroll() {
        window.addEventListener('scroll', () => {
            let currentSection = this.activeSection;

            for (const sectionId of this.sections) {
                const element = document.getElementById(sectionId);
                if (element) {
                    const rect = element.getBoundingClientRect();
                    if (rect.top <= 100 && rect.bottom >= 100) {
                        currentSection = sectionId;
                    }
                }
            }
            this.activeSection = currentSection;
        });
    }
}
