<template lang="html">

    <h5>Here are my blogs (just the titles for now)</h5>

    <ul class="list--unstyled">
        <li v-for="blog in blogs_list">
            {{ blog.title }}
        </li>
    </ul>

</template>

<script>

    export default {

        data: function () {
            return {
                blogs_list: []
            };
        },

        created: function() {
            this.fetchBlogsList();
        },

        computed: {},

        ready: function () {},

        attached: function () {},

        methods: {

            fetchBlogsList: function() {
                var vm = this;
                vm.$http.get('api/blogs')
                        .then((blogs) => {
                            // successful AJAX request
                            vm.$set('blogs_list', blogs.json());
                        })
                        .then((error) => {
                            // handle error
                        });
            }

        },

        components: {}

    }

</script>

<style lang="css">



</style>
