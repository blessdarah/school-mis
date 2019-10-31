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
                            <a href="staff/{{$staff->id}}" class="badge badge-info">view profile</a>
                                <form action="staff/{{$staff->id}}" method="POST" class="form d-inline">
                                    @method('DELETE')
                                    @csrf
                                    <input type="submit" value="delete" class="btn btn-danger btn-sm p-0 px-2 border-0 rounded-pill">
                                </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<!-- pagination -->
@include('includes/pagination');
@endsection
