// browserify main entrypoint

var Vue = require('vue');
Vue.use(require('vue-resource'));

var VueRouter = require('vue-router');
Vue.use(VueRouter);

import Blogs from './components/Blogs.vue';

// Setup vue-router
var router = new VueRouter();

router.map({

    '/': {
        component: Blogs
    },

    '/about': {
        component: {
            template: '<p>This is the about page.</p>'
        }
    },

    '/contact': {
        component: {
            template: '<p>This is the contact page.</p>'
        }
    }

});

var App = Vue.extend({});

// new Vue ({
//
//     el: '#blogs',
//
//     components: { Blogs }
//
// });

router.start(App, '#blogs');
