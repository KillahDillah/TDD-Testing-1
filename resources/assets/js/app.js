
require('./bootstrap');

window.Vue = require('vue');

import ItemList from './components/ItemList';
// Vue.component('itemlist', ItemList);
import BootstrapVue from 'bootstrap-vue'
Vue.use(BootstrapVue);

new Vue({
    el: '#app',
    template: '<ItemList/>',
    components: { ItemList },
});
