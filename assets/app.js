import { createApp, h } from "vue";
import { createInertiaApp } from "@inertiajs/vue3";
// Import global styles (Tailwind + custom theme)
import "./styles/app.css";

// 👇 import.meta.glob scanne dynamiquement toutes les pages du dossier Pages
createInertiaApp({
    resolve: (name) => {
        const pages = import.meta.glob("./Pages/**/*.vue", { eager: true });
        return pages[`./Pages/${name}.vue`];
    },
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            .mount(el);
    },
});
