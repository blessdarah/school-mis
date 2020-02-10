@extends('layouts.main')

@section('content')
    <div class="card my-5 mx-5">
        <div class="card-header">
            Add new class
        </div>
        <div class="card-body">
            <form action="/admin/level/{{$level->id}}" method="POST" class="form">
                @csrf
                @method('PATCH')
                @include('admin/levels/form')

                <a href="/admin/level/" class="btn btn-warning">Cancel</a>
                <input type="submit" class="btn btn-primary" value="Update class">
            </form>
        </div>
    </div>
@endsection
