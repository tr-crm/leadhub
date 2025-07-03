import {Component, OnInit} from '@angular/core';
import {NgForOf} from '@angular/common';
import {NgbDropdown, NgbDropdownMenu, NgbDropdownToggle} from '@ng-bootstrap/ng-bootstrap';
import {LanguageOptionType} from '@/app/types/layout';
import {LanguageService} from '@core/services/language.service';

@Component({
  selector: 'app-language-dropdown',
    imports: [
        NgForOf,
        NgbDropdown,
        NgbDropdownMenu,
        NgbDropdownToggle
    ],
  templateUrl: './language-dropdown.component.html'
})
export class LanguageDropdownComponent implements OnInit {
    languages: LanguageOptionType[] = [];
    selectedLang: LanguageOptionType = this.languages[0];

    constructor(private langService: LanguageService) {
    }

    ngOnInit(): void {
        this.languages = this.langService.getLanguages();
        this.langService.currentLang$.subscribe(lang => this.selectedLang = lang);
        this.langService.initLanguage();
    }

    changeLanguage(code: string) {
        this.langService.setLanguage(code);
    }
}
