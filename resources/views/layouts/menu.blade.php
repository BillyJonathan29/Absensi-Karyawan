@if(auth()->user()->isOwner())
    @include('layouts.menu.owner')
@elseif(auth()->user()->isStaff())
    @include('layouts.menu.staff')
@endif