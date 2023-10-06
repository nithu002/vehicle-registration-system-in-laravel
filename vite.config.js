import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['assets/plugins/fontawesome-free/css/all.min.css','assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css','assets/dist/css/adminlte.min.css'],
            refresh: true,
        }),
    ],
});
