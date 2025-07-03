import {Injectable} from '@angular/core';
import {BehaviorSubject} from 'rxjs';
import {LanguageOptionType} from '@/app/types/layout';

const STORAGE_KEY = '__INSPINIA_ANGULAR_LANG__';

const availableLanguages: LanguageOptionType[] = [
    {code: 'en', name: 'English', nativeName: 'English', flag: 'assets/images/flags/us.svg'},
    {code: 'de', name: 'German', nativeName: 'Deutsch', flag: 'assets/images/flags/de.svg'},
    {code: 'it', name: 'Italian', nativeName: 'Italiano', flag: 'assets/images/flags/it.svg'},
    {code: 'es', name: 'Spanish', nativeName: 'Español', flag: 'assets/images/flags/es.svg'},
    {code: 'ru', name: 'Russian', nativeName: 'Русский', flag: 'assets/images/flags/ru.svg'},
    {code: 'hi', name: 'Hindi', nativeName: 'हिन्दी', flag: 'assets/images/flags/in.svg'}
];

@Injectable({providedIn: 'root'})
export class LanguageService {

    private currentLangSubject = new BehaviorSubject<LanguageOptionType>(availableLanguages[0]);
    currentLang$ = this.currentLangSubject.asObservable();

    getLanguages(): LanguageOptionType[] {
        return availableLanguages;
    }

    setLanguage(code: string) {
        const lang = availableLanguages.find(l => l.code === code);
        if (lang) {
            this.currentLangSubject.next(lang);
            localStorage.setItem(STORAGE_KEY, code);
        }
    }

    initLanguage() {
        const saved = localStorage.getItem(STORAGE_KEY);
        if (saved) this.setLanguage(saved);
    }
}
