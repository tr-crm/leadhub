import {Injectable, signal} from '@angular/core';
import {LayoutState} from '@/app/types/layout';

import {NgbOffcanvas} from '@ng-bootstrap/ng-bootstrap';
import {CustomizerComponent} from '@layouts/components/customizer/customizer.component';
import {BehaviorSubject} from 'rxjs';

const STORAGE_KEY = '__INSPINIA_ANGULAR_CONFIG__';

const defaultState: LayoutState = {
    skin: 'classic',
    theme: 'light',
    orientation: 'vertical',
    position: 'fixed',
    width: 'fluid',
    topbar: {color: 'light'},
    sidenav: {
        color: 'dark',
        size: 'default',
        user: true
    },
    isLoading: false
};

@Injectable({providedIn: 'root'})
export class LayoutStoreService {

    constructor(private offcanvasService: NgbOffcanvas) {
        this.applyAllAttributes();
    }

    state = signal<LayoutState>(this.loadInitialState());

    private html = document.documentElement;

    private layoutStateSubject = new BehaviorSubject<LayoutState>(this.state());
    readonly layoutState$ = this.layoutStateSubject.asObservable();

    private loadInitialState(): LayoutState {
        try {
            const stored = localStorage.getItem(STORAGE_KEY);
            return stored ? JSON.parse(stored) : defaultState;
        } catch {
            return defaultState;
        }
    }

    private persistToStorage() {
        localStorage.setItem(STORAGE_KEY, JSON.stringify(this.state()));
    }

    get skin() {
        return this.state().skin;
    }

    get theme() {
        return this.state().theme;
    }

    get orientation() {
        return this.state().orientation;
    }

    get position() {
        return this.state().position;
    }

    get width() {
        return this.state().width;
    }

    get topbarColor() {
        return this.state().topbar.color;
    }

    get sidenavColor() {
        return this.state().sidenav.color;
    }

    get sidenavSize() {
        return this.state().sidenav.size;
    }

    get sidenavUser() {
        return this.state().sidenav.user;
    }

    get isLoading() {
        return this.state().isLoading;
    }


    setSkin(skin: LayoutState['skin'], persist = true): void {
        this.setHtmlAttribute('data-skin', skin);
        if (persist) {
            this.state.update(s => ({...s, skin}));
            this.persistToStorage();
        }
        this.layoutStateSubject.next({...this.state(), skin});
    }

    setTheme(theme: LayoutState['theme'], persist = true): void {
        this.setHtmlAttribute('data-bs-theme', theme === 'system' ? this.getSystemTheme() : theme);
        if (persist) {
            this.state.update(s => ({...s, theme}));
            this.persistToStorage();
        }
        this.layoutStateSubject.next({...this.state(), theme});
    }

    setLayoutOrientation(orientation: LayoutState['orientation'], persist = true): void {
        this.setHtmlAttribute('data-layout', orientation === 'horizontal' ? 'topnav' : '');
        if (persist) {
            this.state.update(s => ({...s, orientation,}));
            this.persistToStorage();
        }
        this.layoutStateSubject.next({...this.state(), orientation});
    }

    setLayoutPosition(position: LayoutState['position'], persist = true): void {
        this.setHtmlAttribute('data-layout-position', position);
        if (persist) {
            this.state.update(s => ({...s, position,}));
            this.persistToStorage();
        }
        this.layoutStateSubject.next({...this.state(), position});
    }

    setLayoutWidth(width: LayoutState['width'], persist = true): void {
        this.setHtmlAttribute('data-layout-width', width);
        if (persist) {
            this.state.update(s => ({...s, width,}));
            this.persistToStorage();
        }
        this.layoutStateSubject.next({...this.state(), width});
    }

    setTopbarColor(color: LayoutState['topbar']['color'], persist = true): void {
        this.setHtmlAttribute('data-topbar-color', color);
        if (persist) {
            this.state.update(s => ({
                ...s,
                topbar: {...s.topbar, color},
            }));
            this.persistToStorage();
        }
        this.layoutStateSubject.next({...this.state(), topbar: {...this.state().topbar, color}});
    }

    setSidenavColor(color: LayoutState['sidenav']['color'], persist = true): void {
        this.setHtmlAttribute('data-menu-color', color);
        if (persist) {
            this.state.update(s => ({
                ...s,
                sidenav: {...s.sidenav, color},
            }));
            this.persistToStorage();
        }
        this.layoutStateSubject.next({...this.state(), sidenav: {...this.state().sidenav, color}});
    }

    setSidenavSize(size: LayoutState['sidenav']['size'], persist = true): void {
        this.setHtmlAttribute('data-sidenav-size', size);
        if (persist) {
            this.state.update(s => ({
                ...s,
                sidenav: {...s.sidenav, size},
            }));
            this.persistToStorage();
        }
        this.layoutStateSubject.next({...this.state(), sidenav: {...this.state().sidenav, size}});
    }

    toggleSidenavUser(persist = true): void {
        const user = !this.state().sidenav.user
        this.setHtmlAttribute('data-sidenav-user', String(user));
        if (persist) {
            this.state.update(s => ({
                ...s,
                sidenav: {...s.sidenav, user},
            }));
            this.persistToStorage();
        }
        this.layoutStateSubject.next({...this.state(), sidenav: {...this.state().sidenav, user}});
    }

    setIsLoading(isLoading: boolean): void {
        this.state.update(s => ({
            ...s,
            isLoading: isLoading,
        }));
        this.persistToStorage();
    }

    reset(persist = true): void {
        this.state.set(defaultState);
        this.applyAllAttributes();
        if (persist) this.persistToStorage();
    }

    private applyAllAttributes(): void {
        const current = this.state();
        this.setHtmlAttribute('data-skin', current.skin);
        this.setHtmlAttribute('data-bs-theme', current.theme === 'system' ? this.getSystemTheme() : current.theme);
        this.setHtmlAttribute('data-layout-position', current.position);
        this.setHtmlAttribute('data-layout-width', current.width);
        this.setHtmlAttribute('data-topbar-color', current.topbar.color);
        this.setHtmlAttribute('data-menu-color', current.sidenav.color);
        this.setHtmlAttribute('data-sidenav-size', current.sidenav.size);
        this.setHtmlAttribute('data-sidenav-user', String(current.sidenav.user));
        this.setHtmlAttribute('data-layout', current.orientation === 'horizontal' ? 'topnav' : '');
    }

    openCustomizer(): void {
        this.offcanvasService.open(CustomizerComponent, {
            position: 'end',
            backdrop: true,
            scroll: true,
        });
    }

    setHtmlAttribute(attr: string, value: string) {
        this.html.setAttribute(attr, value);
    }

    getSystemTheme(): "light" | "dark" {
        return window.matchMedia('(prefers-color-scheme: dark)').matches ? "dark" : "light";
    }

    showBackdrop() {
        const backdrop = document.createElement('div');
        backdrop.id = 'custom-backdrop';
        backdrop.className = 'offcanvas-backdrop fade show';
        document.body.appendChild(backdrop);
        document.body.style.overflow = 'hidden';
        if (window.innerWidth > 767) {
            document.body.style.paddingRight = '15px';
        }
        backdrop.addEventListener('click', () => {
            this.html.classList.remove('sidebar-enable');
            this.hideBackdrop();
        })
    }

    hideBackdrop() {
        const backdrop = document.getElementById('custom-backdrop');
        if (backdrop) {
            document.body.removeChild(backdrop);
            document.body.style.overflow = '';
            document.body.style.paddingRight = '';
        }
    }
}
