import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css', 
                'resources/css/basic.css', 
                'resources/js/app.js',
                'resources/js/list.js',
                'resources/js/create.js',
                'resources/js/show.js',
                'resources/js/edit.js',
            ],
            refresh: true,
        }),
    ],
});
