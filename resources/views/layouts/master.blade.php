<!DOCTYPE html>
<html>
    <head>
            <title>@yield('title') | MY Blog</title>
    </head>
    <body>
        @include('layouts.partials.navigation')
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>
<?php

