<template lang="html">

    <h5>Create a New Blog</h5>

    <hr>

    <form method="post">
        <fieldset>
            <legend>Blog Information</legend>

            <p>
                <label for="title">Title:</label>
                <input type="text" placeholder="Enter title">
            </p>

            <p>
                <label for="content">Content:</label>
                <textarea name="content" rows="6"></textarea>
            </p>

            <button class="button--sm button--pill" type="submit" value="Submit">Submit</button>
        </fieldset>
    </form>

</template>

<script>

    export default {
      data() {
        return {
        };
      },
      computed: {},
      ready() {},
      attached() {},
      methods: {},
      components: {}
};

</script>

<style lang="css">

</style>
