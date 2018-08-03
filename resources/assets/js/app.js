require('./bootstrap');

window.Vue = require('vue');

Vue.component('example-component', require('./components/ExampleComponent.vue'));

import ItemList from './components/ItemList'


const app = new Vue({
    el: '#app',
    data: {

    },
    component: {
        ItemList
    },

});
