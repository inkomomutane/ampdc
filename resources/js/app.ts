import { DropdownPT, EditorPT, CalendarPT, MultiSelectPt } from './PrimePtCustomization/PrimePassThroughOptions';
import "./bootstrap";
import '../css/app.css';
import  'flowbite'

import { createApp, h, DefineComponent } from "vue";
import { createInertiaApp } from "@inertiajs/vue3";
import { resolvePageComponent } from "laravel-vite-plugin/inertia-helpers";
import { ZiggyVue } from "../../vendor/tightenco/ziggy/dist/vue.m";
import PrimeVue from "primevue/config";
import.meta.glob(["../errors/svgs/**", "../js/images/**"]);
import Tooltip from "primevue/tooltip";
createInertiaApp({
    title: (title) => `${title}`,
    resolve: (name) =>
        resolvePageComponent(
            `./Pages/${name}.vue`,
            import.meta.glob<DefineComponent>("./Pages/**/*.vue")
        ),
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(PrimeVue, {
                pt:{
                    dropdown : DropdownPT,
                    editor: EditorPT,
                    calendar: CalendarPT,
                    multiselect: MultiSelectPt
                }
            })
            .use(ZiggyVue, Ziggy)
            .directive("tooltip", Tooltip)
            .mount(el);
    },

    progress: {
        color: "#4B5563",
    },

});
