@extends('layouts/main')

@section('content')
<div class="row py-5">
<!-- Create new student form -->
    <div class="col-lg-8 offset-lg-2 col-sm-12">
        <div class="card" id="form__register">
            <div class="card-header">
                Create student account
            </div>
            <div class="card-body">
                <form class="form" method="POST" action="/admin/student">
                    <!-- personal info -->
                    @include('admin.students.form')
                    <a href="/admin/student" class="btn btn-warning mr-2">Back</a>
                    <input type="submit" name="new-student" class="btn btn-primary" value="Create account">
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
