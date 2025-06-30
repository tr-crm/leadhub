/**
 * Template Name: INSPINIA - Multipurpose Admin & Dashboard Template
 * By (Author): WebAppLayers
 * Module/App (File Name): Misc Tinycon
 * Version: 4.0.1
 */

const setTinycon = (selector, bubble, color) => {
    const element = document.getElementById(selector)
    if (element) {
        element.addEventListener('click', (e) => {
            e.preventDefault();
            Tinycon.setOptions({background: color});
            Tinycon.setBubble(bubble);
        })
    }
};


setTinycon('iconExample1', 1, '#f03d25');

setTinycon('iconExample2', 1000, '#f03d25');

setTinycon('iconExample3', 'In', '#f03d25');

setTinycon('iconExample4', 8, '#e0913b');