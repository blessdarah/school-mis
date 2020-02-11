@extends('layouts.main')


@section('content')

<div class="mt-5 mb-3 text-right mx-5">
    <a href="/admin/guardians" class="btn btn-warning">Cancel</a>
    <a href="/admin/guardians/{{$guardian->id}}/edit" class="btn btn-success">Update info</a>
</div>

<div class="card mx-5">
    <div class="card-header">
       Details of parent or guardian
    </div>
    <div class="card-body px-0">
        <table class="table table-striped table-rounded">
            <thead>
                <tr>
                    <th>Option</th>
                    <th>Mother</th>
                    <th>Father</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="font-weight-bold">Name</td>
                    <td>{{$guardian->mothers_name}}</td>
                    <td>{{$guardian->fathers_name}}</td>
                </tr>

                <tr>
                    <td class="font-weight-bold">Phone number</td>
                    <td>{{$guardian->mothers_contact}}</td>
                    <td>{{$guardian->fathers_contact}}</td>
                </tr>

                <tr>
                    <td class="font-weight-bold">Profession</td>
                    <td>{{$guardian->mothers_profession}}</td>
                    <td>{{$guardian->fathers_profession}}</td>
                </tr>

                <tr>
                    <td class="font-weight-bold">Address</td>
                    <td>{{$guardian->mothers_address}}</td>
                    <td>{{$guardian->fathers_address}}</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@endsection
