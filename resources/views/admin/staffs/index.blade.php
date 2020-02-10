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
                @foreach ($staffs as $index => $staff)
                    <tr>
                    <td>{{ $index + 1}}</td>
                        <td>{{ $staff->firstname}} {{ $staff->lastname }}</td>
                        <td>{{$staff->gender}}</td>
                        <td>Chemistry</span></td>
                        <td>Form 5B</td>
                        <td>
                            <a href="/admin/staff/{{$staff->id}}" class="btn btn-sm btn-success"><i class="fa fa-eye"></i></a>

                            <a href="/admin/staff/{{$staff->id}}/edit" class="btn btn-sm btn-primary"><i class="fa fa-pencil"></i></a>

                            <form action="/admin/staff/{{$staff->id}}" method="POST" class="form d-inline-block">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
