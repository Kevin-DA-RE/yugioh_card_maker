// assets/app.js
import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/vue3'
import Layout from '@layout/Layout.vue'   // ✅ Ton layout global
import './styles/app.css'                  // (facultatif) ton CSS global

createInertiaApp({
    resolve: (name) => {
        // Charge automatiquement toutes les pages du dossier Pages
        const pages = import.meta.glob('./pages/**/*.vue', { eager: true })
        const page = pages[`./pages/${name}.vue`]

        // // ✅ Si la page n'a pas de layout défini, on lui applique Layout.vue
        if (!page.default.layout) {
            page.default.layout = Layout
        }

        return page
    },

    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            .mount(el)
    },
})
