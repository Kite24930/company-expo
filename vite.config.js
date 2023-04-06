import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    server: {
        hmr: {
            host: 'localhost',
        },
        https: true,
    },
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
    build: {
        manifest: true,
        rollupOptions: {
            input: {
                app: 'resources/js/app.js',
                index: 'resources/js/index.js',
                edit: 'resources/js/edit.js',
                list: 'resources/js/list.js',
            }
        }
    }
});
