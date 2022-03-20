<!DOCTYPE html>
<html>
<head>
    <title>Ludmais Admin - Financeiro</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DataTable - Mazer Admin Dashboard</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">

    <!-- <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet"> -->
    <link rel="stylesheet" href="{{ url(mix('assets/css/app.css')) }}">
    <link rel="stylesheet" href="{{ URL::asset('template/assets/vendors/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="shortcut icon" href="{{ URL::asset('template/assets/images/favicon.svg') }}" type="image/x-icon">

    <!-- Lista -->
    <script src="{{ url(mix('assets/js/app.js')) }}"></script>

    <!-- add ao mix -->
    <script src="//cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">


</head>
<body>
    <div id="app">
        @include('navbar_lateral')
        <div id="main" style="padding-top: 0px;">
            <?=alert() ?>
            @yield('content')
        <footer>
            <div class="footer clearfix mb-0 text-muted">
                <div class="float-start">
                    <p>2021 &copy; Mazer</p>
                </div>
                <div class="float-end">
                    <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a
                                href="http://ahmadsaugi.com">A. Saugi</a></p>
                    </div>
                </div>
        </footer>
        </div>
    </div>
</body>



<script src="{{ url(mix('assets/js/app_footer.js')) }}"></script>
    <!-- <script src="{{ URL::asset('template/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ URL::asset('template/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ URL::asset('template/assets/js/main.js') }}"></script> -->
</html>