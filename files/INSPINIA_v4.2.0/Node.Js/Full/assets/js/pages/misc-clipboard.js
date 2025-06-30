/**
 * Template Name: INSPINIA - Multipurpose Admin & Dashboard Template
 * By (Author): WebAppLayers
 * Module/App (File Name): Misc Clipboard
 * Version: 4.0.1
 */

const elements = document.querySelectorAll('[data-clipboard-target]');

if (elements && elements.length > 0) {
    new ClipboardJS(elements);
}