<nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            @foreach ($breadcrumbs as $breadcrumb)
                <li class="breadcrumb-item @if ($loop->last) active @endif">
                    @if ($loop->last)
                        {{ $breadcrumb['name'] }}
                    @else
                        <a href="{{ $breadcrumb['url'] }}">{{ $breadcrumb['name'] }}</a>
                    @endif
                </li>
            @endforeach
        </ol>
    </nav>
    