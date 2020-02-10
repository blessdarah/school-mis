@extends('layouts/main')

@section('content')
<div class="row py-5">
<!-- Create new student form -->
    <div class="col-12">
        <div class="text-right">
            <a href="/admin/student/create" class="btn btn-success mb-3"><i class="fa fa-user-plus"></i> Add student</a>
        </div>
       <table class="table table-striped table-rounded table-bordered">
           <thead class="bg-white">
               <tr>
                   <th>#</th>
                   <th>Names</th>
                   <th>POB</th>
                   <th>DOB</th>
                   <th>Gender</th>
                   <th>Options</th>
               </tr>
           </thead>
           <tbody>
                @foreach ($students as $index => $student)
                    <tr>
                        <td>{{$index + 1}}</td>
                        <td>{{$student->firstname}} {{$student->lastname}}</td>
                        <td>{{$student->pob}}</td>
                        <td>{{$student->dob}}</td>
                        <td>{{$student->gender}}</td>
                        <td>
                            <a href="/admin/student/{{$student->id}}/edit" class="btn btn-sm btn-primary"><i class="fa fa-pencil"></i></a>

                            <form action="/admin/student/{{$student->id}}" method="POST" class="form form-inline d-inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                            </form>

                        </td>
                    </tr>
                @endforeach
           </tbody>
       </table>
    </div>
</div>
@endsection
