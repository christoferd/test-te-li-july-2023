import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'node_modules/tw-elements/dist/js/tw-elements.es.min.js',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
});
