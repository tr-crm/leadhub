"use client"
import {useState} from "react";
import {Dropdown, DropdownItem, DropdownMenu, DropdownToggle} from "react-bootstrap";
import Image, {StaticImageData} from "next/image";

import flagUS from '@/assets/images/flags/us.svg';
import flagDE from '@/assets/images/flags/de.svg';
import flagIT from '@/assets/images/flags/it.svg';
import flagES from '@/assets/images/flags/es.svg';
import flagRU from '@/assets/images/flags/ru.svg';
import flagIN from '@/assets/images/flags/in.svg';

export type LanguageOptionType = {
    code: string;
    name: string;
    nativeName: string;
    flag: StaticImageData;
}

const availableLanguages: LanguageOptionType[] = [
    {code: 'en', name: 'English', nativeName: 'English', flag: flagUS},
    {code: 'de', name: 'German', nativeName: 'Deutsch', flag: flagDE},
    {code: 'it', name: 'Italian', nativeName: 'Italiano', flag: flagIT},
    {code: 'es', name: 'Spanish', nativeName: 'Español', flag: flagES},
    {code: 'ru', name: 'Russian', nativeName: 'Русский', flag: flagRU},
    {code: 'hi', name: 'Hindi', nativeName: 'हिन्दी', flag: flagIN}
];

const LanguageDropdown = () => {

    const [language, setLanguage] = useState<LanguageOptionType>(availableLanguages[0]);

    return (
        <div className="topbar-item">
            <Dropdown align="end">
                <DropdownToggle as={'button'} className="topbar-link fw-bold  drop-arrow-none">
                    <Image src={language.flag.src}  alt="user-image" className="w-100 rounded me-2" width="18" height="18"/>
                    <span> {language.code.toUpperCase()} </span>
                </DropdownToggle>
                <DropdownMenu className="dropdown-menu-end">
                    {
                        availableLanguages.map(lang => (
                            <DropdownItem key={lang.code} title={lang.name} onClick={() => setLanguage(lang)}>
                                <Image src={lang.flag.src}  alt="English" className="me-1 rounded" width="18" height="18"/>
                                <span className="align-middle">{lang.nativeName}</span>
                            </DropdownItem>
                        ))
                    }
                </DropdownMenu>
            </Dropdown>
        </div>
    )
}

export default LanguageDropdown;