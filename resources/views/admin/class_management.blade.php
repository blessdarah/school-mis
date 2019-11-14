@extends('layouts.dashboard')

@section('content')
<div class="mt-5 mx-2">
        {{-- Overlay form to add a sanction  --}}
    <div class="modal fade" id="new-class" tabindex="-1" aria-label="New sanction" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="text-center modal-title">Add a new class</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-lable="Close"><span>&times;</span></button>
                </div>
                <div class="modal-body">
                    <form action="levels" method="POST" class="form">
                        @csrf
                        <div class="form-group">
                            <label for="class-name">Class name</label>
                            <input type="text" class="form-control" name="class-name" id="class-name" placeholder="Class name" required>
                        </div>
                        <div class="form-group">
                            <label for="class-master">Class master/mistress</label>
                            <select name="class-master" id="class-master" class="form-control">
                                <option value="">Select teacher</option>
                                <option value="1">Bless Darah</option>
                                <option value="2">Leonel</option>
                                <option value="3">Munjam Thomas</option>
                            </select>
                        </div>
                        <input type="submit" class="btn btn-primary" value="Add class">
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="clearfix"><a href="#" class="btn btn-success float-right px-3" data-toggle="modal" data-target="#new-class"><i class="fa fa-plus"></i> Add class</a></div>

    <div class="card p-0 mt-2">
        <table class="table table-striped">
            <thead class="bg-light">
                <tr>
                    <th>#</th>
                    <th>Class name</th>
                    <th>Class Master/Mistress</th>
                    <th>Options</th>
                </tr>
            </thead>
            <tbody>
                @foreach($levels as $level)
                    <tr>
                        <td>{{ $level->id }}</td>
                        <td>{{ $level->name }}</td>
                        <td>Bless Darah</td>
                        <td>
                            <a href="#" class="badge badge-info">view</a>
                            <a href="#" class="badge badge-secondary">edit</a>
                            <a href="#" class="badge badge-danger">delete</a>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</div>
@endsection
