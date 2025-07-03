/**
 * Template Name: INSPINIA - Multipurpose Admin & Dashboard Template
 * By (Author): WebAppLayers
 * Module/App (File Name): Misc Text Diff
 * Version: 4.0.1
 */

class TextDiff {
    constructor(originalSelector = '.diff-original', changedSelector = '.diff-changed', outputSelector = '.diff-output') {
        this.originalInput = document.querySelector(originalSelector);
        this.changedInput = document.querySelector(changedSelector);
        this.diffOutput = document.querySelector(outputSelector);

        this.bindEvents();
        this.render();
    }

    bindEvents() {
        if (this.originalInput) this.originalInput.addEventListener('input', () => this.render());
        if (this.changedInput) this.changedInput.addEventListener('input', () => this.render());
    }

    render() {
        if (!this.originalInput || !this.changedInput) return;

        const originalText = this.originalInput.value;
        const changedText = this.changedInput.value;
        const diff = Diff.diffWords(originalText, changedText);

        const fragment = document.createDocumentFragment();
        diff.forEach(part => {
            let el;
            if (part.added) {
                el = document.createElement('ins');
            } else if (part.removed) {
                el = document.createElement('del');
            } else {
                el = document.createElement('span');
            }
            el.textContent = part.value;
            fragment.appendChild(el);
        });

        if (this.diffOutput) {
            this.diffOutput.innerHTML = '';
            this.diffOutput.appendChild(fragment);
        }
    }
}

document.addEventListener("DOMContentLoaded", () => {
    new TextDiff();
})