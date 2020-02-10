@extends('layouts.main')


@section('content')


<section class="container mt-5">
    <div class="text-right">
        <a href="/admin/course/create" class="btn btn-success"><i class="fa fa-plus"></i> Add course/subject</a>
    </div>
    <!-- Table of all teachers -->
<div class="card mt-2">
    <div class="card-body p-0" id="all-teachers">
        <table class="table table-striped">
            <thead class="bg-light">
                <tr>
                    <th>#</th>
                    <th>Subject</th>
                    <th>Code</th>
                    <th>Coefficient</th>
                    <th>Teacher</th>
                    <th>Class</th>
                    <th>Options</th>
                </tr>
            </thead>
            <tbody>
                <?php $counter = 1; ?>
                @foreach ($courses as $course)
                <tr>
                    <td>{{$counter++}}</td>
                    <td>{{$course->title}}</span></td>
                    <td>{{$course->code}}</td>
                    <td>{{$course->coefficient}}</td>
                    <td>Bless Darah</td>
                    <td>Form 5B</td>
                    <td>
                        <a href="/admin/course/{{$course->id}}/edit" class="badge badge-secondary">edit</a>
                        <form action="/admin/course/{{$course->id}}" method="POST" class="form d-inline">
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
</section>


@endsection
