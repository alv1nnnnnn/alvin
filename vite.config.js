// For Production
import { defineConfig } from 'vite';
import tailwindcss from '@tailwindcss/vite';
import { fileURLToPath } from 'node:url';

export default defineConfig({
    plugins: [
        tailwindcss(),
    ],
    build: {
        outDir: 'dist',
        emptyOutDir: true,
        rollupOptions: {
            input: {
                home: fileURLToPath(new URL('./index.html', import.meta.url)),
                projects: fileURLToPath(new URL('./projects/index.html', import.meta.url)),
                techStack: fileURLToPath(new URL('./tech-stack/index.html', import.meta.url)),
            },
        },
    },
});

// For Local
// import { defineConfig } from 'vite';
// import laravel from 'laravel-vite-plugin';
// import tailwindcss from '@tailwindcss/vite';

// export default defineConfig({
//     plugins: [
//         laravel({
//             input: 'resources/js/app.js',
//             refresh: true,
//         }),
//         tailwindcss(),
//     ],
// });
