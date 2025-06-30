import {AfterViewInit, Component, type ElementRef, HostListener, Input, OnDestroy, ViewChild} from '@angular/core'
import JsVectorMap from 'jsvectormap'

declare global {
    interface Window {
        jsVectorMap?: any
    }
}

@Component({
    selector: 'app-vector-map',
    standalone: true,
    template:
        '<div #mapContainer [style.width]="width" [style.height]="height"></div>',
})
export class VectorMapComponent implements AfterViewInit, OnDestroy {
    @Input() width: string = ''
    @Input() height: string = ''
    @Input() options: Record<string, unknown> = {}
    @ViewChild('mapContainer', {static: true}) mapContainerRef!: ElementRef;

    mapInstance!: any;

    ngAfterViewInit(): void {
        setTimeout(() => {
            const container = this.mapContainerRef.nativeElement;
            const width = container.offsetWidth;
            const height = container.offsetHeight;

            if (width && height) {
                this.mapInstance = new JsVectorMap({
                    selector: container,
                    ...this.options,
                });
            } else {
                console.warn('JsVectorMap: container has invalid dimensions.');
            }
        }, 100);
    }

    @HostListener('window:resize')
    onWindowResize(): void {
        this.mapInstance?.updateSize();
    }

    ngOnDestroy(): void {
        this.mapInstance?.destroy();
    }
}
