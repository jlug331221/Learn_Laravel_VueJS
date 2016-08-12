<template lang="html">

    <div class="blogs-container" v-show="! blog">
        <h5>All Blogs</h5>

        <i class="fa fa-cog fa-spin fa-3x fa-fw loading-cog"
            v-show="loading">
        </i>

        <article class="card" v-for="blog in blogs_list">
            <div class="card-content">
                <span class="card-title"><h6>{{ blog.title }}</h6></span>
                <p>{{ blog.content }}</p>
            </div>

            <div class="card-footer">
                <a v-on:click="fetchBlog(blog.id)">Read More...</a>
            </div>
        </article>
    </div>

    <div class="blog-container" v-show="blog">
        <h5>Here is a detailed look of Blog #{{ blog.id }}:</h5>

        <i class="fa fa-cog fa-spin fa-3x fa-fw loading-cog"
            v-show="loading">
        </i>

        <article class="card" >
            <div class="card-content">
                <span class="card-title"><h6>{{ blog.title }}</h6></span>
                <p>{{ blog.content }}</p>
            </div>

            <div class="card-footer">
                <button class="button--xsm button--pill" v-on:click="fetchBlogsList()">
                    Back to blogs
                </button>
            </div>
        </article>
    </div>

</template>

<script>

    export default {

        data() {
            return {
                loading: false,

                blogs_list: [],

                blog: ''
            };
        },

        created() {
            this.fetchBlogsList();
        },

        computed: {},

        ready() {},

        attached() {},

        methods: {

            fetchBlogsList() {
                var vm = this;
                vm.loading = true;
                vm.blog = '';
                vm.$http.get('api/blogs')
                    .then((blogs) => {
                        // successful AJAX request
                        vm.$set('loading', false);
                        vm.$set('blogs_list', blogs.json());
                    })
                    .then((error) => {
                        // handle error
                    });
            },

            fetchBlog(blogID) {
                var vm = this;
                vm.loading = true;
                vm.blogs_list = [];
                vm.$http.get('api/blog/' + blogID)
                    .then((blog) => {
                        vm.$set('loading', false);
                        vm.$set('blog', blog.json());
                    })
                    .then((error) => {

                    });
            }

        },

        components: {}

    }

</script>

<style lang="css">

    .loading-cog {
        margin-top: 1em;
        margin-bottom: 1em;
        display: block;
        margin-left: auto;
        margin-right: auto;
    }

</style>
