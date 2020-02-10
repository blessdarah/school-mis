@extends('layouts/main')

@section('content')
<div class="mt-5 clearfix">
    <a href="/admin/staff/create" class="btn btn-success px-3 float-right"><i class="fa fa-plus"></i> Add Teacher</a>
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
                        <td>{{ $staff->firstname}} {{ $staff->lastname }}</td>
                        <td>{{$staff->gender}}</td>
                        <td>Chemistry</span></td>
                        <td>Form 5B</td>
                        <td>
                            <a href="/admin/staff/{{$staff->id}}" class="badge badge-info">view profile</a>
                            <form action="/admin/staff/{{$staff->id}}" method="POST" class="form d-inline">
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
@endsection
