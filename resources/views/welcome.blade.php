<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <title>Blick - Click at random blocks !</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="{{ mix('css/app.css') }}" rel="stylesheet" type="text/css">
        <link rel="icon" href="{{ URL::asset('img/favicon.ico') }}" />
    </head>

    <body>
        <div id="game-area">
            <block-app></block-app>

            <img src="{{ URL::asset('img/logo.png') }}" class="logo" alt="Blick" />
        </div>

        <script src="{{mix('js/app.js')}}"></script>

        <!--
            TODOS
                - Leaderboard
                    * Auto refresh
                    * Fix bug on click at the same time
                - Blocks
                    * Fix the issue when block is deleted: this is not the right block on other windows
        -->
    </body>
</html>