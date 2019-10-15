@extends('layouts/dashboard')

@section('content')

<div class="mt-5 clearfix">
    <a href="/admin/add-staff" class="btn btn-success px-3 float-right"><i class="fa fa-plus"></i> Add Teacher</a>
</div>
<!-- Table of all teachers -->
<div class="card mt-2">
    <div class="card-body p-0" id="all-teachers">
        <table class="table table-striped" id="staffs">
            <thead class="bg-light">
                <tr>
                    <th>#</th>
                    <th>Teacher's name</th>
                    <th>Gender</th>
                    <th>Course</th>
                    <th>Class in charge</th>
                    <th>Options</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($staffs as $staff)
                    <tr>
                    <td>{{ $staff->id}}</td>
                        <td>{{ $staff->first_name}} {{ $staff->last_name}}</td>
                        <td>{{$staff->gender}}</td>
                        <td>Chemistry</span></td>
                        <td>Form 5B</td>
                        <td>
                            <a href="#" class="badge badge-info">view</a>
                            <a href="#" class="badge badge-secondary">edit</a>
                            <a href="#" class="badge badge-danger">delete</a>
                        </td>
                    </tr>
                @endforeach
                <tr>
                    <td>2</td>
                    <td>Thomas Person</td>
                    <td>Male</td>
                    <td>Physics</td>
                    <td>Form 5B</td>
                    <td>
                        <a href="#" class="badge badge-info">view</a>
                        <a href="#" class="badge badge-secondary">edit</a>
                        <a href="#" class="badge badge-danger">delete</a>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Sonkey Victor</td>
                    <td>Male</td>
                    <td>Mathematics</td>
                    <td>Form 3A</td>
                    <td>
                        <a href="#" class="badge badge-info">view</a>
                        <a href="#" class="badge badge-secondary">edit</a>
                        <a href="#" class="badge badge-danger">delete</a>
                    </td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Jane Doe</td>
                    <td>Female</td>
                    <td>Hitory</td>
                    <td>Form 5B</td>
                    <td>
                        <a href="#" class="badge badge-info">view</a>
                        <a href="#" class="badge badge-secondary">edit</a>
                        <a href="#" class="badge badge-danger">delete</a>
                    </td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Awah Patience</td>
                    <td>Female</td>
                    <td>Literature in English</td>
                    <td>Form 2C</td>
                    <td>
                        <a href="#" class="badge badge-info">view</a>
                        <a href="#" class="badge badge-secondary">edit</a>
                        <a href="#" class="badge badge-danger">delete</a>
                    </td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>James Tucker</td>
                    <td>Male</td>
                    <td>French language</td>
                    <td>Form 1A</td>
                    <td>
                        <a href="#" class="badge badge-info">view</a>
                        <a href="#" class="badge badge-secondary">edit</a>
                        <a href="#" class="badge badge-danger">delete</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<!-- pagination -->
@include('includes/pagination');
@endsection
