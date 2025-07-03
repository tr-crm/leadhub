/**
 * Template Name: INSPINIA - Multipurpose Admin & Dashboard Template
 * By (Author): WebAppLayers
 * Module/App (File Name): Form Inputmask
 * Version: 4.0.1
 */

document.addEventListener('DOMContentLoaded', () => {
    const elements = document.querySelectorAll('[data-toggle="input-mask"]')
    if (elements && elements.length > 0) {
        elements.forEach(e => {
            const maskFormat = e.getAttribute('data-mask-format').replace(/0/g, '9');
            const im = new Inputmask(maskFormat);
            im.mask(e);
        })
    }
});