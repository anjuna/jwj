require('./bootstrap');

import store from './vuex/store';
import App from './components/App.vue';

const app = new Vue({
    store,
    el: 'body',
    components: {
        App
    }
});
