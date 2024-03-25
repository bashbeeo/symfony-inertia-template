import { defineConfig } from 'vite';
import symfony from './symfony-vite-plugin.js';
import vue from '@vitejs/plugin-vue';
import { quasar, transformAssetUrls as quasarTransformAssetFiles } from '@quasar/vite-plugin'

export default defineConfig({
    plugins: [
        symfony({
            input: [
                'resources/js/admin.js',
            ],
            refresh: true,
        }),
        vue({
            template: {
                transformAssetUrls: {
                    base: null,
                    includeAbsolute: false,
                },
                quasarTransformAssetFiles
            },
        }),
        quasar({
            sassVariables: 'resources/css/quasar-variables.sass'
        })
    ],
});
