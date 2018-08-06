
require('./bootstrap');
import Vue from 'vue'
Vue.use(BootstrapVue)
Vue.config.productionTip = false

// window.Vue = require('vue');

import ItemList from './components/ItemList';
import BootstrapVue from 'bootstrap-vue'
Vue.use(BootstrapVue);

new Vue({
    el: '#app',
    template: '<ItemList/>',
    components: { ItemList },
    data: {
        items: [
            { name: 'Leah', description:'yesh'},
            { name: 'Mila', description:'no'},
            { name: 'Cat', description:'sup'},
        ]
    }
});
