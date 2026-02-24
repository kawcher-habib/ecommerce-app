@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card p-4">
            <!-- <h3>Welcome, {{ Auth::user()->name }}</h3>
            <p>Email: {{ Auth::user()->email }}</p> -->

            <div class="d-flex justify-content-between mt-4">
                <form method="POST" action="/logout">
                    @csrf
                    <button type="submit" class="btn btn-danger">Logout</button>
                </form>

                <a href="http://foodpanda.local" class="btn btn-success">Go to Foodpanda</a>
            </div>
        </div>
    </div>
</div>
@endsection