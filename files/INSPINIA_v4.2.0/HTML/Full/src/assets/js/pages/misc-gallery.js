/**
 * Template Name: INSPINIA - Multipurpose Admin & Dashboard Template
 * By (Author): WebAppLayers
 * Module/App (File Name): Misc Gallery
 * Version: 4.0.1
 */

//
// GLightbox
//
const lightbox = GLightbox({
    selector: ".image-popup",
    title: false
});


//
// Muuri js
//
const gridElement = document.getElementById('grid');
let grid = null;

if (gridElement) {
    grid = new Muuri(gridElement, {
        dragEnabled: true,
        layout: {rounding: false}
    });
}

if (grid) {
    // Search
    const searchInput = document.querySelector('input[name="search"]');
    if (searchInput) {
        searchInput.addEventListener('input', function (e) {
            const searchTerm = e.target.value.toLowerCase();
            grid.filter(item => {
                return item.getElement().textContent.toLowerCase().includes(searchTerm);
            });
        });
    }

    // Filter buttons
    const buttons = document.querySelectorAll('.filter-buttons button');
    if (buttons.length > 0) {
        buttons.forEach(button => {
            button.addEventListener('click', () => {
                const filter = button.dataset.filter;

                // Apply category filter
                grid.filter(item => {
                    const category = item.getElement().dataset.category;
                    return !filter || category === filter;
                });

                // Update active button styling
                buttons.forEach(btn => btn.classList.remove('active'));
                button.classList.add('active');
            });
        });
    }
}
