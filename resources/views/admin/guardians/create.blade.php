@extends('layouts.main')


@section('content')

<div class="card mx-5 mt-5">
    <div class="card-header">
        Add parent or guardian
    </div>
    <div class="card-body">
        <form action="/admin/guardians/" method="POST" class="form">
            @csrf
            {{-- Form here --}}
            @include("admin/guardians/form")

            <a href="/admin/guardians" class="btn btn-warning mr-3">Cancel</a>
            <input type="submit" class="btn btn-primary" value="Add parent">
        </form>
    </div>
</div>

@endsection
