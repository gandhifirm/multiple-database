import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "public/scripts/bootstrap.min.css",
                "public/scripts/navbar-top-fixed.css",
                "public/scripts/popover.js",
                "public/scripts/bootstrap.min.js",
            ],
            refresh: true,
        }),
    ],
});
