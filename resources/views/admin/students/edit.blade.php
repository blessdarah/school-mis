@extends('layouts/main')

@section('content')
<div class="row py-5">
<!-- Create new student form -->
    <div class="col-lg-8 offset-lg-2 col-sm-12">
        <div class="card">
            <div class="card-header">
                Edit student account
            </div>
            <div class="card-body">
                <form class="form" method="POST" action="/admin/student/{{$student->id}}">
                    <!-- personal info -->
                    @csrf
                    @method('PATCH')
                    @include('admin/students/form')

                    {{-- controls --}}
                    <a href="/admin/student" class="btn btn-warning mr-2">Cancel</a>
                    <input type="submit" class="btn btn-primary" value="Update student info">
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
