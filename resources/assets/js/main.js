// browserify main entrypoint

var Vue = require('vue');
Vue.use(require('vue-resource'));

import Blogs from './components/Blogs.vue';

new Vue({

    el: '#blogs',

    components: { Blogs }

    // ready() {
    //     alert('Ready to go!');
    // }

})
