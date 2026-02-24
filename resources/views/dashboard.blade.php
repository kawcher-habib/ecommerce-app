@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="row">
    <!-- Sidebar navigation -->
    <div class="col-md-3 mb-4">
        <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action active">Overview</a>
            <a href="#" class="list-group-item list-group-item-action">Products</a>
            <a href="#" class="list-group-item list-group-item-action">Orders</a>
            <a href="#" class="list-group-item list-group-item-action">Customers</a>
            <a href="#" class="list-group-item list-group-item-action">Settings</a>
        </div>
    </div>

    <!-- Main content area -->
    <div class="col-md-9">
        <div class="card p-4 mb-4">
            <h2 class="mb-1">Welcome, {{ Auth::user()->name }}</h2>
            <p class="text-muted">Email: {{ Auth::user()->email }}</p>
        </div>

        <!-- Metrics cards -->
        <div class="row g-3 mb-4">
            <div class="col-sm-6 col-lg-3">
                <div class="card text-center p-3">
                    <h4 class="mb-2">120</h4>
                    <small class="text-muted">Total Orders</small>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="card text-center p-3">
                    <h4 class="mb-2">$8,450</h4>
                    <small class="text-muted">Revenue</small>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="card text-center p-3">
                    <h4 class="mb-2">7</h4>
                    <small class="text-muted">Pending Shipments</small>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="card text-center p-3">
                    <h4 class="mb-2">34</h4>
                    <small class="text-muted">New Customers</small>
                </div>
            </div>
        </div>

        <!-- Quick actions and logout -->
        <div class="card p-4">
            <h5 class="card-title">Quick Actions</h5>
            <div class="d-flex flex-wrap gap-2">
                <a href="#" class="btn btn-primary">Add Product</a>
                <a href="#" class="btn btn-secondary">View Orders</a>
                <a href="#" class="btn btn-warning">Manage Customers</a>
                <a href="/logout" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="btn btn-danger">Logout</a>
            </div>

            <form id="logout-form" action="/logout" method="POST" class="d-none">
                @csrf
            </form>
        </div>
    </div>
</div>
@endsection