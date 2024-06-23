<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('admin/images/logo.png') }}" type="image/x-icon">

    <!----======== Google Fonts ======== -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap"
        rel="stylesheet">

    <!----======== CSS ======== -->
    <link rel="stylesheet" href="{{ asset('admin/style.css') }}">

    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <title>@yield('title')</title>
</head>

<body>

    @include('admin.layout.sidebar')
    <section class="dashboard">
        @include('admin.layout.header')
        @yield('content')
    </section>

    <script src="{{ asset('admin/script.js') }}"></script>
</body>

</html>
