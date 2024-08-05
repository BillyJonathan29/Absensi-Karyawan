<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Admin Dashboard">
    <meta name="author" content="Billy Jonathan">
    <title>@yield('title', 'Default Title')</title>

    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom/dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('css/apexcharts.css') }}">
    <script src="{{ asset('js/charts/apexcharts.min.js') }}"></script>
</head>

<body>
    <div class="dashboard-wrapper">
        <!-- Sidebar -->
        <aside id="sidebar" class="sidebar d-none d-xl-block">
            <x-sidebar brand="ACURSIO" :items="$sidebarItems" />
        </aside>

        <!-- Main Content -->
        <main class="content-wrapper">
            <div class="container-xl">
                <!-- Header Section -->
                <header class="dashboard-header">
                    <nav class="breadcrumb">
                        @include('components.breadcrumbs', ['breadcrumbs' => $breadcrumbs])
                    </nav>
                    <div>
                        <div class="dropdown">
                            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Dropdown link
                            </a>
                          
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                              <a class="dropdown-item" href="#">Action</a>
                              <a class="dropdown-item" href="#">Another action</a>
                              <form action="{{ route('logout') }}" method="POST" class="d-inline">
                                @csrf
                                <button type="submit" class="btn btn-danger"
                                        style="display: inline; padding: 0; margin: 0; border: none; cursor: pointer;">
                                        Logout
                                </button>
                        </form>
                            </div>
                          </div>
                        
                    </div>
                </header>

                <!-- Main Content Section -->
                <section class="main-content px-3">
                    @yield('content')
                </section>

                <!-- Optional Footer Section -->
                <footer class="dashboard-footer mt-4">
                    <p class="text-center">© 2024 Your Company. All rights reserved.</p>
                </footer>
            </div>
        </main>
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
                const parentLink = document.querySelector(`[data-target="#${parentCollapse.id}"]`);
                parentCollapse.classList.add('show');
                parentLink.classList.add('active');
                const parentArrowIcon = parentLink.querySelector('.arrow-icon');
                parentArrowIcon.classList.add('rotate-up');
            }
        }

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
            link.addEventListener('click', function(event) {
                event.preventDefault();
                const url = link.getAttribute('href');
                $.ajax({
                    url: url,
                    method: 'GET',
                    success: function(response) {
                        // Update the main content
                        $('.content-wrapper').html($(response).find('.content-wrapper').html());

                        // Update breadcrumbs
                        updateBreadcrumbs(response.breadcrumbs);

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

    function updateBreadcrumbs(breadcrumbs) {
        let breadcrumbHtml = '';
        breadcrumbs.forEach((breadcrumb, index) => {
            breadcrumbHtml += `<li class="breadcrumb-item ${index === breadcrumbs.length - 1 ? 'active' : ''}">`;
            if (index === breadcrumbs.length - 1) {
                breadcrumbHtml += `${breadcrumb.name}`;
            } else {
                breadcrumbHtml += `<a href="${breadcrumb.url}">${breadcrumb.name}</a>`;
            }
            breadcrumbHtml += `</li>`;
        });
        $('.breadcrumb ol').html(breadcrumbHtml);
    }

    // Set arrow direction when collapse is shown
    const collapses = document.querySelectorAll('.collapse.show');
    collapses.forEach(collapse => {
        const link = document.querySelector(`[data-target="#${collapse.id}"]`);
        const arrowIcon = link.querySelector('.arrow-icon');
        arrowIcon.classList.add('rotate-up');
        link.classList.add('active');
    });

    // Add event listener for collapse status change
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
