@extends('layouts.main')

@section('content')
   <div class="card mt-5 mx-5">
       <div class="card-header">
           Create new course
       </div>
       <div class="card-body">
        <form action="/admin/course/" method="POST" class="form">
            @include('admin.courses.form')
            <div class="form-group">
                <a href="/admin/course" class="btn btn-outline-secondary">Cancel</a>
                <button class="btn btn-primary" type="submit">Add Subject</button>
            </div>
        </form>
       </div>
   </div>
@endsection
