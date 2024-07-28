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
    <header class="dashboard-header fixed-top">
        @include('components.header')
    </header>

    <div class="dashboard-wrapper">
        <x-sidebar brand="ACURSIO" :items="$sidebarItems" />
        <div class="dashboard-content pt-3 p-md-3 p-lg-4">
            <div class="container-xl">
                @yield('content')
                <button class="btn btn-danger">Logout</button>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/f5247f6a92.js" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function() {
    const navLinks = document.querySelectorAll('.nav-link');
    const currentUrl = window.location.href;

    navLinks.forEach(link => {
        if (link.href === currentUrl) {
            link.classList.add('active');
            const parentCollapse = link.closest('.collapse');
            if (parentCollapse) {
                const parentLink = document.querySelector('[data-target="#' + parentCollapse.id + '"]');
                parentCollapse.classList.add('show');
                parentLink.classList.add('active');
                const parentArrowIcon = parentLink.querySelector('.arrow-icon');
                parentArrowIcon.classList.add('rotate-up');
            }
        }

        // Event listener untuk link dengan children
        if (link.getAttribute('data-toggle') === 'collapse') {
            link.addEventListener('click', function() {
                const target = document.querySelector(link.getAttribute('data-target'));
                const arrowIcon = link.querySelector('.arrow-icon');

                if (target.classList.contains('show')) {
                    arrowIcon.classList.remove('rotate-up');
                } else {
                    arrowIcon.classList.add('rotate-up');
                }
            });
        } else {
            // Event listener untuk link biasa
            link.addEventListener('click', function(event) {
                event.preventDefault();
                const url = link.getAttribute('href');
                $.ajax({
                    url: url,
                    method: 'GET',
                    success: function(response) {
                        $('.dashboard-content').html($(response).find('.dashboard-content').html());
                        window.history.pushState({}, '', url);
                        navLinks.forEach(navLink => navLink.classList.remove('active'));
                        link.classList.add('active');
                    },
                    error: function(xhr) {
                        let errorMessage = 'An error occurred while loading the page.';
                        if (xhr.status === 404) {
                            errorMessage = 'Page not found (404).';
                        } else if (xhr.status === 500) {
                            errorMessage = 'Internal server error (500).';
                        }
                        alert(errorMessage);
                    }
                });
            });
        }
    });

    // Set arah panah ketika collapse
    const collapses = document.querySelectorAll('.collapse.show');
    collapses.forEach(collapse => {
        const link = document.querySelector('[data-target="#' + collapse.id + '"]');
        const arrowIcon = link.querySelector('.arrow-icon');
        arrowIcon.classList.add('rotate-up');
        link.classList.add('active');
    });

    // Tambahkan event listener untuk perubahan status collapse
    const collapsibles = document.querySelectorAll('[data-toggle="collapse"]');
    collapsibles.forEach(collapsible => {
        collapsible.addEventListener('click', function() {
            const target = document.querySelector(collapsible.getAttribute('data-target'));

            navLinks.forEach(link => link.classList.remove('active'));
            collapsible.classList.add('active');

            const allArrowIcons = document.querySelectorAll('.arrow-icon');
            allArrowIcons.forEach(icon => icon.classList.remove('rotate-up'));

            const arrowIcon = collapsible.querySelector('.arrow-icon');
            if (target.classList.contains('show')) {
                arrowIcon.classList.remove('rotate-up');
            } else {
                arrowIcon.classList.add('rotate-up');
            }
        });
    });
});

    </script>
</body>

</html>