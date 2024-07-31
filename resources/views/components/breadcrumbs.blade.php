<!-- resources/views/components/breadcrumbs.blade.php -->
<nav aria-label="breadcrumb">
        <ol class="breadcrumb">
                @foreach ($breadcrumbs as $breadcrumb)
                <li class="breadcrumb-item">
                        @if (!$loop->last)
                        <a href="{{ $breadcrumb['url'] }}">{{ $breadcrumb['name'] }}</a>
                        @else
                        <span>{{ $breadcrumb['name'] }}</span>
                        @endif
                </li>
                @endforeach
        </ol>
</nav>