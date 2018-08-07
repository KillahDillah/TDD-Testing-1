import Vue from 'vue'
Vue.config.productionTip = false
require('./bootstrap');
import ItemList from './components/ItemList';
import BootstrapVue from 'bootstrap-vue'
Vue.use(BootstrapVue);

// window.Vue = require('vue');
new Vue({
    el: '#app',
    template: '<ItemList/>',
    components: { ItemList },
});
