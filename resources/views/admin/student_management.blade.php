@extends('layouts/dashboard')

@section('content')

<div class="mt-5 clearfix">
    <a href="/admin/add-student" class="btn btn-success px-3 float-right">Add Student</a>
</div>
<!-- Table of all students -->
<div class="card mt-2">
    <div class="card-body p-0">
        <table class="table table-striped">
            <thead class="bg-light">
                <tr>
                    <th>#</th>
                    <th>Student name</th>
                    <th>Gender</th>
                    <th>Registration status</th>
                    <th>Class</th>
                    <th>Options</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Bless Darah</td>
                    <td>Male</td>
                    <td><span class="badge badge-success">complete</span></td>
                    <td>Form 5B</td>
                    <td>
                        <a href="#" class="badge badge-info">view</a>
                        <a href="#" class="badge badge-secondary">edit</a>
                        <a href="#" class="badge badge-danger">delete</a>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Thomas Person</td>
                    <td>Male</td>
                    <td><span class="badge badge-warning">incomplete</span></td>
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
                    <td><span class="badge badge-warning">incomplete</span></td>
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
                    <td><span class="badge badge-success">complete</span></td>
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
                    <td><span class="badge badge-success">complete</span></td>
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
                    <td><span class="badge badge-warning">incomplete</span></td>
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
    @include('includes/pagination')
@endsection
