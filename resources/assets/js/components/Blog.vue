<template lang="html">

    <i class="fa fa-cog fa-spin fa-3x fa-fw loading-cog"
        v-show="loadingBlogAnimation">
    </i>

    <div class="blog-container" v-show="blog">
        <h5>Here is a detailed look of Blog #{{ blog.id }}:</h5>

        <article class="card" >
            <div class="card-content">
                <span class="card-title"><h6>{{ blog.title }}</h6></span>
                <p>{{ blog.content }}</p>
            </div>

            <div class="card-footer">
            </div>
        </article>
    </div>

    <div class="alert alert--error" v-show="cannotFindBlog" transition="fade">
        <a @click="cannotFindBlog = false" class="alert-close">&times;</a>

        <p><strong>Error: Cannot find blog</strong></p>
    </div>

</template>

<script>

    export default {

        data() {
            return {
                loadingBlogAnimation: false,

                cannotFindBlog: false,

                blog: ''
            };
        },

        created() {
          this.fetchBlog();
        },

        computed: {},

        ready() {},

        attached() {},

        methods: {

            fetchBlog() {
                var vm = this;
                vm.loadingBlogAnimation = true;
                // vm.blogs_list = [];
                // vm.$http.get('api/blog/' + blogID)
                vm.$http.get('api/blog/' + vm.$route.params.blogID)
                    .then((blog) => {
                        vm.$set('loadingBlogAnimation', false);
                        vm.$set('blog', blog.json());
                    }, (error) => {
                        vm.$set('loadingBlogAnimation', false);
                        vm.$set('cannotFindBlog', true);
                    });
            }

        },

        components: {}

        };

</script>

<style lang="css">

    .loading-cog {
        margin-top: 1em;
        margin-bottom: 1em;
        display: block;
        margin-left: auto;
        margin-right: auto;
    }

    .fade-transition {
        transition: all 2s ease;
    }

    .fade-enter, .fade-leave {
        opacity: 0;
    }

    .required {
        font-weight: 900;
        color: red;
    }

</style>
