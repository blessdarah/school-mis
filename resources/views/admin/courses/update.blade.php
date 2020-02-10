@extends('layouts.main')


@section('content')


<div class="card mt-5 mx-5">
    <div class="card-header">
        Update course
    </div>
    <div class="card-body">
        <form action="/admin/course/{{$course->id}}" method="POST" class="form">
            @method('PATCH')
            @include('admin.courses.form')

            <div class="form-group">
                <a href="/admin/course" class="btn btn-warning">Cancel</a>
                <button class="btn btn-primary" type="submit">Update Subject</button>
            </div>
        </form>
    </div>
</div>

@endsection
