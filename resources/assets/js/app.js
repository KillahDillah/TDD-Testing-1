
require('./bootstrap');

window.Vue = require('vue');

import ItemList from './components/ItemList';
// Vue.component('itemlist', ItemList);

new Vue({
    el: '#app',
    template: '<ItemList/>',
    components: { ItemList },
});
