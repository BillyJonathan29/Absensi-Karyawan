@extends('layouts.dashboard')
@section('title', $title)

@section('content')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4 content">
        <h1>Main Content</h1>
        <p>This is the main content area. Here you can place your page content.</p>
        @include('components.breadcrumbs')
        <button class="btn btn-danger">Logout</button>









</main>
@endsection