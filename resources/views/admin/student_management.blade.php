@extends('layouts/dashboard')

@section('content')

<div class="mt-5 clearfix">
    <a href="/admin/add-student" class="btn btn-success px-3 float-right"><i class="fa fa-user-plus"></i> Add Student</a>
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
                @if($students)
                    @foreach ($students as $student)
                        {{$counter = 0}}
                        <tr>
                            <td>{{$counter += 1}}</td>
                            <td class="text-capitalize">{{$student->firstname}} {{$student->lastname}}</td>
                            <td>{{$student->gender}}</td>
                            <td><span class="badge badge-success">complete</span></td>
                            <td>Form 5B</td>
                            <td>
                                <a href="/student/{{$student->id}}" class="badge badge-info">view</a>
                                <a href="/student/{{$student->id}}/edit" class="badge badge-secondary">edit</a>
                                <form action="/student/{{$student->id}}" method="POST" class="form d-inline">
                                    @method('DELETE')
                                    @csrf
                                    <input type="submit" value="delete" class="btn btn-danger btn-sm p-0 px-2 border-0 rounded-pill">
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    @else
                        <p class="text-muted">No student added yet</p>
                @endif
            </tbody>
        </table>
    </div>
</div>

<!-- pagination -->
    @include('includes/pagination')
@endsection
