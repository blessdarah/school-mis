@extends('layouts/dashboard')

@section('content')
<div class="mt-5 mx-2">
        {{-- Overlay form to add a parent  --}}
    <div class="modal fade" id="new-parent" tabindex="-1" aria-label="New parent" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="text-center modal-title">Add a new parent</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-lable="Close"><span>&times;</span></button>
                </div>
                <div class="modal-body">
                    <form action="parents" method="POST" class="form">
                        @csrf
                        <!-- Parents information -->
                        <div class="form-row">
                            <div class="form-group col-md-6 col-sm-12">
                                <label for="father-name">Father's name</label>
                                <input type="text" class="form-control" name="father-name" id="father-name" placeholder="Enter name">
                            </div>
                            <div class="form-group col-md-6 col-sm-12">
                                <label for="mother-name">Mother's name</label>
                                <input type="text" class="form-control" name="mother-name" id="mother-name" placeholder="Enter name">
                            </div>
                            <div class="form-group col-md-6 col-sm-12">
                                <label for="father-contact">Father's contact</label>
                                <input type="tel" class="form-control" name="father-contact" id="father-contact" placeholder="(+237) xxx xxx xxx">
                            </div>
                            <div class="form-group col-md-6 col-sm-12">
                                <label for="mother-contact">Mother's contact</label>
                                <input type="tel" class="form-control" name="mother-contact" id="mother-contact" placeholder="(+237) xxx xxx xxx">
                            </div>


                            <div class="form-group col-md-6 col-sm-12">
                                <label for="father-prof">Father's profession</label>
                                <input type="text" class="form-control" name="father-prof" id="father-prof" placeholder="Profession?">
                            </div>
                            <div class="form-group col-md-6 col-sm-12">
                                <label for="mother-prof">Mother's profession</label>
                                <input type="text" class="form-control" name="mother-prof" id="mother-prof" placeholder="Profession?">
                            </div>

                            <div class="form-group col-md-6 col-sm-12">
                                <label for="father-addr">Father's address</label>
                                <input type="text" class="form-control" name="father-addr" id="father-addr" placeholder="Town/village - Region">
                            </div>
                            <div class="form-group col-md-6 col-sm-12">
                                <label for="mother-addr">Mother's address</label>
                                <input type="text" class="form-control" name="mother-addr" id="mother-addr" placeholder="Town/village - Region">
                            </div>
                        </div>
                        <input type="submit" class="btn btn-primary" value="Add parent">
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    {{-- button activate modal for adding parents --}}
    <div class="clearfix"><a href="#" class="btn btn-success float-right px-3" data-toggle="modal" data-target="#new-parent"><i class="fa fa-plus"></i> Add parent</a></div>

    <div class="card p-0 mt-2">
        <table class="table table-striped">
            <thead class="bg-light">
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Profession</th>
                    <th>Address</th>
                    <th>Contact</th>
                    <th>Options</th>
                </tr>
            </thead>
            <tbody>
                {{-- @foreach($levels as $level)
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
                @endforeach --}}
                <tr>
                    <td>1</td>
                    <td>James wiliman</td>
                    <td>Male</td>
                    <td>Accountant</td>
                    <td>Upstation bamenda</td>
                    <td>569784125</td>
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
@endsection
