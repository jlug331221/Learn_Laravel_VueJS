<!DOCTYPE html>
<html>

    <head>
        <title>Laravel & VueJS</title>

        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    </head>

    <body>

        @{{ message }}

        <script src="{{ asset('js/all.js') }}"></script>

        <script type="text/javascript">

            new Vue({
                el: 'body',
                data: {
                    message: ''
                }
            })

        </script>

    </body>

</html>
