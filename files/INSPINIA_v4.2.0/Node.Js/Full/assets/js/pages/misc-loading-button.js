/**
 * Template Name: INSPINIA - Multipurpose Admin & Dashboard Template
 * By (Author): WebAppLayers
 * Module/App (File Name): Misc Loading Button
 * Version: 4.0.1
 */

// Bind basic Ladda buttons
function bindBasicButtons(selector, timeout = 2000) {
    const buttons = document.querySelectorAll(selector);
    buttons.forEach(btn => Ladda.bind(btn, {timeout}));
}


// Bind progress simulation buttons
function bindProgressButtons(selector) {
    const buttons = document.querySelectorAll(selector);
    buttons.forEach(btn => {
        Ladda.bind(btn, {
            callback: function (instance) {
                let progress = 0;
                const interval = setInterval(() => {
                    progress = Math.min(progress + Math.random() * 0.1, 1);
                    instance.setProgress(progress);

                    if (progress === 1) {
                        instance.stop();
                        clearInterval(interval);
                    }
                }, 200);
            }
        });
    });
}


// Bind manually controlled Ladda button
function bindManualButton(selector, stopDelay = 12000) {
    const btn = document.querySelector(selector);
    if (btn) {
        const instance = Ladda.create(btn);

        btn.addEventListener("click", () => {
            instance.start();

            setTimeout(() => {
                instance.stop();
            }, stopDelay);
        });
    }
}


bindBasicButtons(".ladda-button:not(.progress-demo .ladda-button):not(.ladda-button-demo)");
bindProgressButtons(".progress-demo .ladda-button");
bindManualButton(".ladda-button-demo");