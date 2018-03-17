<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        input[type=number] {
            -moz-appearance:textfield;
        }

        input[type=number]::-webkit-inner-spin-button,
        input[type=number]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
    </style>
</head>
<body>

    <div id="app">

        <Myheader></Myheader>

        <div class="container">
            <router-view></router-view>
        </div>



        <Myfooter></Myfooter>

    </div>


    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>