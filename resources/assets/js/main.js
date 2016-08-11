// browserify main entrypoint

var Vue = require('vue');

import Blogs from './components/Blogs.vue';

new Vue({

    el: '#blogs',

    components: { Blogs }

    // components: { Blogs },
    //
    // ready() {
    //     alert('Ready to go!');
    // }

})
