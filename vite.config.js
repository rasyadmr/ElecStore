import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import html from "@rollup/plugin-html";

export default defineConfig({
    base: "/ElecStore/",
    build: {
        outDir: "dist", // Ensure assets are placed in the 'dist' folder
        emptyOutDir: true,
        rollupOptions: {
            input: "resources/js/app.js", // Main JS entry
            plugins: [
                html({
                    inject: {
                        injectScripts: `<script type="module" src="/${base}/resources/js/app.js"></script>`, // Manually inject the app.js into the HTML
                    },
                }),
            ],
        },
    },
    plugins: [
        laravel({
            input: ["resources/css/app.css", "resources/js/app.js"],
            refresh: true,
        }),
    ],
});
