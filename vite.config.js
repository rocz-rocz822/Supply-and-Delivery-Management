import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    // Used for Virtual Host, feel free to comment out.
    server: {
        host: 'sdm.test',
        port: 8000,
        hmr: {
            host: 'sdm.test',
            port: 8000
        },
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
});
