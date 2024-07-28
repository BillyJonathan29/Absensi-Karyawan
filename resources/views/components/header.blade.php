<!-- resources/views/components/header.blade.php -->
<header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#">Brand</a>
                <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ml-auto">
                                @if($authUser)
                                <li class="nav-item">
                                        <a class="nav-link" href="#">Hello, {{ $authUser->name }}</a>
                                </li>
                                <li class="nav-item">
                                        <form action="{{ route('logout') }}" method="POST" class="d-inline">
                                                @csrf
                                                <button type="submit" class="nav-link btn btn-link"
                                                        style="display: inline; padding: 0; margin: 0; border: none; background: none; cursor: pointer;">
                                                        Logout
                                                </button>
                                        </form>
                                </li>
                                @endif
                        </ul>
                </div>
        </nav>
</header>