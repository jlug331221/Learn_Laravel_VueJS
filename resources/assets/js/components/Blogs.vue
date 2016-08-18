<template lang="html">

    <div class="blogs-container">
        <h5>All Blogs</h5>

        <i class="fa fa-cog fa-spin fa-3x fa-fw loading-cog"
            v-show="loadingBlogsAnimation">
        </i>

        <article class="card" v-for="blog in blogs_list" v-show="blogs_list">
            <div class="card-content">
                <span class="card-title"><h6>{{ blog.title }}</h6></span>
                <p>{{ blog.content }}</p>
            </div>

            <div class="card-footer">
                <a v-link="{ name: 'blog', params: { blogID: blog.id } }">Read More...</a>
            </div>
        </article>
    </div>

</template>

<script>

    export default {

        data() {
            return {
                loadingBlogsAnimation: false,

                blogs_list: []
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
                vm.loadingBlogsAnimation = true;
                vm.blog = '';
                vm.$http.get('api/blogs')
                    .then((blogs) => {
                        // successful AJAX request
                        vm.$set('loadingBlogsAnimation', false);
                        vm.$set('blogs_list', blogs.json());
                    }, (error) => {
                        // handle error
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
