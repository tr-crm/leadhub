/**
 * Template Name: INSPINIA - Multipurpose Admin & Dashboard Template
 * By (Author): WebAppLayers
 * Module/App (File Name): Misc Animation
 * Version: 4.0.1
 */

document.addEventListener("DOMContentLoaded", function () {
    const animationButtons = document.querySelectorAll(".animation_select");
    const animationBox = document.getElementById("animation_box");

    if (animationButtons.length && animationBox) {
        animationButtons.forEach(button => {
            button.addEventListener("click", function (e) {
                e.preventDefault();

                const animation = button.getAttribute("data-animation");
                if (!animation) return;

                // Remove all classes from animationBox and reset
                animationBox.className = '';

                // Add animation classes
                animationBox.classList.add("animate__animated", `animate__${animation}`);
            });
        });
    }
});