@extends('layouts.main')

@section('content')
    <div class="card my-5 mx-5">
        <div class="card-header">
            Add new class
        </div>
        <div class="card-body">
            <form action="/admin/level/" method="POST" class="form">
                @csrf
                @include('admin/levels/form')
                <input type="submit" class="btn btn-primary" value="Add class">
            </form>
        </div>
    </div>
@endsection
