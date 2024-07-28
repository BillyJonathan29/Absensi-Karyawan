<!DOCTYPE html>
<html lang="en">

<head>
        <title>@yield('title', 'Default Title')</title>
        <!-- Meta -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Admin Dashboard">
        <meta name="author" content="Billy Jonathan">

        <!-- Stylesheets -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/custom/main.css') }}">
        <link rel="stylesheet" href="{{ asset('css/custom/dashboard.css') }}">
</head>

<body>


        <div class="dashboard-wrapper">
                @include('components.header')
                <div class="dashboard-content pt-3 p-md-3 p-lg-4">
                        <div class="container-xl">
                                @yield('content')
                                <button class="btn btn-danger">Logout</button>
                        </div>
                </div>
        </div>


</body>

</html>