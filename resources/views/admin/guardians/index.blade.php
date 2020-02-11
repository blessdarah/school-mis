@extends('layouts/main')

@section('content')
<div class="text-right mt-5 mb-3">
    <a href="/admin/guardians/create" class="btn btn-success">Add new guardian</a>
</div>
<div class="card">
    <div class="card-body px-0 pt-0">
        <table class="table table-striped">
            <thead class="bg-light">
                <tr>
                    <th>#</th>
                    <th>Father's name</th>
                    <th>Profession</th>
                    <th>Address</th>
                    <th>Contact</th>
                    <th>Options</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($guardians as $index => $guardian)
                <tr>
                    <td>{{$index + 1}}</td>
                    <td>{{$guardian->fathers_name}}</td>
                    <td>{{$guardian->fathers_profession}}</td>
                    <td>{{$guardian->fathers_address}}</td>
                    <td>{{$guardian->fathers_contact}}</td>
                    <td>
                        <a href="/admin/guardians/{{$guardian->id}}" class="btn btn-sm btn-success"><i class="fa fa-eye"></i></a>
                        <a href="/admin/guardians/{{$guardian->id}}/edit" class="btn btn-sm btn-primary"><i class="fa fa-pencil"></i></a>
                        <form action="/admin/guardians/{{$guardian->id}}" method="POST" class="form d-inline">
                            @method('DELETE')
                            @csrf
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
