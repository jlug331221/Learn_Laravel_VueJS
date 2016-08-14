<template lang="html">

    <h5>Create a New Blog</h5>

    <hr>

    <form v-on:submit.prevent="createBlog()">
        <!-- {{ csrf_field() }} -->
        <fieldset>
            <legend>Blog Information</legend>

            <p>
                <label for="title">
                    Title:
                    <span class="required" v-show="! blogData.title">*</span>
                </label>
                <input v-model="blogData.title" type="text" placeholder="Enter title">
            </p>

            <p>
                <label for="content">
                    Content:
                    <span class="required" v-show="! blogData.content">*</span>
                </label>
                <textarea v-model="blogData.content" name="content" rows="6"></textarea>
            </p>

            <button class="button--sm button--pill" type="submit" value="Submit" :disabled="createBlogFormErrors" v-show="! blogCreated" transition="fade"
            >
                Submit
            </button>
        </fieldset>
    </form>

    <div class="alert alert--success" v-show="blogCreated" transition="fade">
        <a @click="blogCreated = false" class="alert-close">&times;</a>

        <p>
            <strong>Success!</strong> You have created a new blog.
        </p>
    </div>

</template>

<script>

export default {

    data() {
        return {
            blogData: {
                title: '',
                content: ''
            },

            blogCreated: false
        };
    },

    computed: {
        createBlogFormErrors() {
            for (var key in this.blogData) {
                if(! this.blogData[key]) {
                    return true;
                }
            }

            return false;
        }
    },

    ready() {},

    attached() {},

    methods: {
        createBlog(blogData) {
            var vm = this;

            vm.$http.post('api/createBlog', vm.blogData)
            .then((newBlog) => {
                vm.blogData.title = '';
                vm.blogData.content = '';
                vm.blogCreated = true;
            })
            .then((error) => {
                // Handle error
            });
        }
    },

    components: {}

};

</script>

<style lang="css">

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
