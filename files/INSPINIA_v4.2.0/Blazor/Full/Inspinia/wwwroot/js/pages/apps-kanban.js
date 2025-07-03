/**
 * Template Name: INSPINIA - Multipurpose Admin & Dashboard Template
 * By (Author): WebAppLayers
 * Module/App (File Name): Apps Kanban
 * Version: 4.2.0
 */

window.loadAppsKanban = function () {
    document.querySelectorAll('[data-plugins="sortable"]').forEach(el => {
        new Sortable(el, {
            animation: 150,
            group: 'shared',
            ghostClass: 'sortable-item-ghost',
            forceFallback: true,
            emptyInsertThreshold: 100,
            chosenClass: 'sortable-item-active'
        });
    });
}