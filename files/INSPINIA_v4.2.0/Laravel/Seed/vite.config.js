import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                //js
                'resources/js/config.js',
                'resources/js/app.js',
                'resources/js/pages/auth-password.js',
                'resources/js/pages/auth-two-factor.js',
                'resources/js/pages/landing.js',

                //css
                'resources/scss/app.scss',
            ],
            refresh: true,
        }),
    ],
});
