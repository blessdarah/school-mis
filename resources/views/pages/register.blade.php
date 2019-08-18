@extends('layouts/main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-8 offset-lg-3 offset-md-2">
                <div class="card" id="form__register">
                    <div class="card-header text-center">
                        <h3>Create user account</h3>
                    </div>
                    <div class="card-body">
                        <div class="form">
                            <fieldset>
                                <legend>Personal information</legend>

                                <div class="form-row">
                                    <div class="form-group col-6">
                                        <label for="firstname">First name</label>
                                        <input type="text" class="form-control" name="firstname" id="firstname" placeholder="First name">
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="lastname">Last name</label>
                                        <input type="text" class="form-control"  name="lastname" id="lastname" placeholder="Last name">
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-6">
                                        <label for="dob">Date of birth</label>
                                        <input type="date" name="dob" class="form-control" id="dob" placeholder="select date">
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="pob">Place of birth</label>
                                        <input type="text" name="pob" class="form-control" id="pob" placeholder="place of brith">
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-6">
                                        <label for="gender">Gender</label>
                                        <select name="gender" id="gender" class="form-control">
                                            <option value="male" selected>Male</option>
                                            <option value="female">Female</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="class">Admission class</label>
                                        <select name="class" id="class" class="form-control">
                                            <option value="null">Choose a class</option>
                                            <option value="form 1">Form 1</option>
                                            <option value="form 2">Form 2</option>
                                            <option value="form 3">Form 3</option>
                                            <option value="form 4">Form 4</option>
                                            <option value="form 5">Form 5</option>
                                        </select>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
