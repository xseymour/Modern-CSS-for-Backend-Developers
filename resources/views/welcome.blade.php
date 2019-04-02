<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Modern CSS for Backend Developers</title>

        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
            
        {{-- Google font Open Sans --}}
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    </head>
    <body>

        <div id="app">
            <header>
                <div class="container">
                    <div class='header-top'>
                        <h1>XCasts</h1>
                        <a href="#">Sign In</a>
                    </div>
                        
                    <nav>
                        <a :href="laracast_url" target="_blank">Episode List</a>
                        <a href="#">Catalog</a>
                        <a href="#">Series</a>
                        <a href="#">Podcast</a>
                        <a href="#">Discussions</a>
                    </nav>  
                </div>
            </header>
        </div>

        {{-- Scripts --}}
        <script src="{{ mix('js/manifest.js') }}"></script>
        <script src="{{ mix('js/vendor.js') }}"></script>
        <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>