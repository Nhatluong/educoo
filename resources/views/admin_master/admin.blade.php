<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('/css/head.css')}}">
    @yield('stylesheet')
    </head>
    <body>
    <div class="wrapper">
        @include('admin_master.header')
        <div class="container">
            <div class="contain_logo">
                <img src="http://educoo.vn/Data/ResizeImage/files/Logo-finalx200x60x4.png">
            </div>
        </div>
        <div class="wrap_content">
            @yield('content')
        </div>
        <footer></footer>
    </div>
        <!-- Latest compiled and minified JavaScript -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"
            integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
            crossorigin="anonymous"></script>
    <script src="{{asset('/js/head.js')}}"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    @yield('script')
    </body>
</html>
