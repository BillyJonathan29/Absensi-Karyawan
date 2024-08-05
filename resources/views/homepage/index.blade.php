@extends('layouts.homepage')
@section('title', 'HOMEPAGE')

@section('content')
<main class="container mt-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
                <div>
                        <h1>Dashboard</h1>
                        <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                        <li class="breadcrumb-item"><i class='bx bx-chevron-right'></i></li>
                                        <li class="breadcrumb-item active" aria-current="page">Home</li>
                                </ol>
                        </nav>
                </div>
                <a href="#" class="btn btn-primary btn-download">
                        <i class='bx bxs-cloud-download'></i>
                        <span class="text">Download PDF</span>
                </a>
        </div>

        <div class="row mb-4">
                <div class="col-md-4 mb-3">
                        <div class="card text-center p-3">
                                <i class='bx bxs-calendar-check mb-2'></i>
                                <h3>1020</h3>
                                <p>New Order</p>
                        </div>
                </div>
                <div class="col-md-4 mb-3">
                        <div class="card text-center p-3">
                                <i class='bx bxs-group mb-2'></i>
                                <h3>2834</h3>
                                <p>Visitors</p>
                        </div>
                </div>
                <div class="col-md-4 mb-3">
                        <div class="card text-center p-3">
                                <i class='bx bxs-dollar-circle mb-2'></i>
                                <h3>$2543</h3>
                                <p>Total Sales</p>
                        </div>
                </div>
        </div>

        <div class="row">
                <div class="col-md-8 mb-4">
                        <div class="card">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                        <h3>Recent Orders</h3>
                                        <div>
                                                <i class='bx bx-search'></i>
                                                <i class='bx bx-filter'></i>
                                        </div>
                                </div>
                                <div class="card-body">
                                        <table class="table">
                                                <thead>
                                                        <tr>
                                                                <th>User</th>
                                                                <th>Date Order</th>
                                                                <th>Status</th>
                                                        </tr>
                                                </thead>
                                                <tbody>
                                                        <tr>
                                                                <td>
                                                                        <img src="img/people.png" alt="User"
                                                                                style="width: 30px; height: 30px;">
                                                                        <p>John Doe</p>
                                                                </td>
                                                                <td>01-10-2021</td>
                                                                <td><span class="status completed">Completed</span></td>
                                                        </tr>
                                                        <tr>
                                                                <td>
                                                                        <img src="img/people.png" alt="User"
                                                                                style="width: 30px; height: 30px;">
                                                                        <p>John Doe</p>
                                                                </td>
                                                                <td>01-10-2021</td>
                                                                <td><span class="status pending">Pending</span></td>
                                                        </tr>
                                                        <tr>
                                                                <td>
                                                                        <img src="img/people.png" alt="User"
                                                                                style="width: 30px; height: 30px;">
                                                                        <p>John Doe</p>
                                                                </td>
                                                                <td>01-10-2021</td>
                                                                <td><span class="status process">Process</span></td>
                                                        </tr>
                                                        <tr>
                                                                <td>
                                                                        <img src="img/people.png" alt="User"
                                                                                style="width: 30px; height: 30px;">
                                                                        <p>John Doe</p>
                                                                </td>
                                                                <td>01-10-2021</td>
                                                                <td><span class="status pending">Pending</span></td>
                                                        </tr>
                                                        <tr>
                                                                <td>
                                                                        <img src="img/people.png" alt="User"
                                                                                style="width: 30px; height: 30px;">
                                                                        <p>John Doe</p>
                                                                </td>
                                                                <td>01-10-2021</td>
                                                                <td><span class="status completed">Completed</span></td>
                                                        </tr>
                                                </tbody>
                                        </table>
                                </div>
                        </div>
                </div>
                <div class="col-md-4">
                        <div class="card">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                        <h3>Todos</h3>
                                        <div>
                                                <i class='bx bx-plus'></i>
                                                <i class='bx bx-filter'></i>
                                        </div>
                                </div>
                                <div class="card-body">
                                        <ul class="list-group">
                                                <li
                                                        class="list-group-item completed d-flex justify-content-between align-items-center">
                                                        Todo List
                                                        <i class='bx bx-dots-vertical-rounded'></i>
                                                </li>
                                                <li
                                                        class="list-group-item completed d-flex justify-content-between align-items-center">
                                                        Todo List
                                                        <i class='bx bx-dots-vertical-rounded'></i>
                                                </li>
                                                <li
                                                        class="list-group-item not-completed d-flex justify-content-between align-items-center">
                                                        Todo List
                                                        <i class='bx bx-dots-vertical-rounded'></i>
                                                </li>
                                                <li
                                                        class="list-group-item completed d-flex justify-content-between align-items-center">
                                                        Todo List
                                                        <i class='bx bx-dots-vertical-rounded'></i>
                                                </li>
                                                <li
                                                        class="list-group-item not-completed d-flex justify-content-between align-items-center">
                                                        Todo List
                                                        <i class='bx bx-dots-vertical-rounded'></i>
                                                </li>
                                        </ul>
                                </div>
                        </div>
                </div>
        </div>
</main>
<form action="{{ route('logout') }}" method="POST" class="d-inline">
        @csrf
        <button type="submit" class="btn btn-danger"
                style="display: inline; padding: 0; margin: 0; border: none; background: none; cursor: pointer;">
                Logout
        </button>
</form>










@endsection