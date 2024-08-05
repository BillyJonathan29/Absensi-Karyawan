<nav id="sidebar" class="sidebar col-md-3 col-lg-2S">
    <div class="sidebar">
        <ul class="nav flex-column">
            <li class="nav-item">
                <div class="d-flex justify-content-start align-items-center mt-3 px-3">
                    <img src="{{ asset('img/acursio-logo.webp') }}" alt="Example Image" class="img-fluid"
                        style="width:18%; height: auto;">
                    <div class="d-flex flex-column brand-container ml-3 py-3">
                        <h5 class="font-weight-bold display-6 brand text-white">{{ $brand }}</h5>
                        <p class="display-7 text-white">Admin Dashboard</p>
                    </div>
                </div>
            </li>
            <div class="mt-3">
                @foreach ($items as $index => $item)
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center w-100" href="{{ $item['link'] }}"
                        @if(isset($item['children'])) data-toggle="collapse" data-target="#collapse-{{ $index }}"
                        role="button" aria-expanded="false" aria-controls="collapse-{{ $index }}" @endif>
                        <i class="fa {{ $item['icon'] }} mr-2"></i>{{ $item['name'] }}
                        @if (isset($item['children']))
                        <i class="fa fa-chevron-down float-right arrow-icon px-3"></i>
                        @endif
                    </a>
                    @if (isset($item['children']))
                    <div class="collapse" id="collapse-{{ $index }}">
                        <ul class="nav flex-column ml-3 children-menu">
                            @foreach ($item['children'] as $child)
                            <li class="nav-item">
                                <a class="nav-link" href="{{ $child['link'] }}">
                                    <i class="fa {{ $child['icon'] }} mr-2"></i>{{ $child['name'] }}
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                </li>
                @endforeach
            </div>
        </ul>
    </div>
</nav>