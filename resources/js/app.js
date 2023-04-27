require('./bootstrap');

import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/inertia-vue3';
import { InertiaProgress } from '@inertiajs/progress';
import Err from '@/Components/Err.vue'

const appName = window.document.getElementsByTagName('title')[0]?.innerText || 'Laravel';

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) => require(`./Pages/${name}.vue`),
    setup({ el, app, props, plugin }) {
        const appVue = createApp({ render: () => h(app, props) });
        appVue.component('Err', Err);
        appVue.config.globalProperties.$getMSG = function (path, objectsReplace) {
            let text = _.get(window.msg, path, );
            if (text) {
                if (objectsReplace) {
                    for (const property in objectsReplace) {
                        text = text.replace(property, objectsReplace[property]);
                    }
                }
                return text;
            } else {
                return path;
            }
        }
        appVue.use(plugin)
            .mixin({ methods: { route } })
            .mount(el);
        return appVue;
    },
});
InertiaProgress.init({ color: '#4B5563' });

