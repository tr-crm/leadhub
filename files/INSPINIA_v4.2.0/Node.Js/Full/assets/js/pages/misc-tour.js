/**
 * Template Name: INSPINIA - Multipurpose Admin & Dashboard Template
 * By (Author): WebAppLayers
 * Module/App (File Name): Misc Tour
 * Version: 4.0.1
 */

try {
    const tg = new tourguide.TourGuideClient({
        keyboardControls: true,
        rememberStep: true,
        dialogZ: 1005,
        backdropColor: "rgba(76, 76, 92, 0.75)"
    });

    tg.onFinish(() => {
        console.warn('Tour finished');
    });

    tg.onAfterStepChange(() => {
        console.warn('Tour step changed');
    });

    tg.addSteps([
        {
            title: '👋 Welcome to the Dashboard Tour',
            content: '<p class="mb-3">Take a quick tour to explore the key features of our admin dashboard.</p><p>Use your keyboard or click "Next" to continue.</p>',
            order: 0
        },
        {
            title: "You're All Set!",
            content: `<p class="mb-3">You’re ready to make the most of your admin panel 🎉</p><p class="mb-3 text-muted">Click anywhere outside the tour to exit.</p>`,
            order: 999
        }
    ]);

    function startTour() {
        tg.start();
    }
} catch {
    console.warn('Some thing went wrong with the tour.');
}
