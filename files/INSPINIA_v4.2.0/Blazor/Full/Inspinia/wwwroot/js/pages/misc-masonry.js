/**
 * Template Name: INSPINIA - Multipurpose Admin & Dashboard Template
 * By (Author): WebAppLayers
 * Module/App (File Name): Misc Masonry
 * Version: 4.2.0
 */

window.loadMiscMasonry = function () {
    const element = document.querySelector('.grid');

    if (element) {
        const msnry = new Masonry(element, {
            itemSelector: '.grid-item',
        });
    }
}
