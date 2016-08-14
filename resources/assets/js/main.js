// browserify main entrypoint

var Vue = require('vue');
Vue.use(require('vue-resource'));

var VueRouter = require('vue-router');
Vue.use(VueRouter);

import Blogs from './components/Blogs.vue';
import Blog from './components/Blog.vue';
import CreateBlog from './components/CreateBlog.vue';

Vue.http.headers.common['X-CSRF-TOKEN'] = document.querySelector('#token').getAttribute('value');

// Setup vue-router
var router = new VueRouter();

// Setup router maps
router.map({

    '/': {
        component: Blogs
    },

    'blog/:blogID': {
        name: 'blog',
        component: Blog
    },

    '/create-blog': {
        component: CreateBlog
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

router.start(App, '#app');
