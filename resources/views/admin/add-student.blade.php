@extends('layouts/dashboard')

@section('content')
<div class="row py-5">
<!-- Create new student form -->
    <div class="col-lg-8 offset-lg-2 col-sm-12">
        <div class="card" id="form__register">
            <div class="card-header text-center">
                <h3>Create user account</h3>
            </div>
            <div class="card-body">
                <div class="form">
                    <!-- personal info -->
                    <fieldset class="personal-info mb-3">
                        <legend class="text-primary"><h4>Personal information</h4></legend><hr class="mt-0">

                        <div class="form-row">
                            <div class="form-group col-md-6 col-sm-12">
                                <label for="firstname">First name</label>
                                <input type="text" class="form-control" name="firstname" id="firstname" placeholder="First name">
                            </div>
                            <div class="form-group col-md-6 col-sm-12">
                                <label for="lastname">Last name</label>
                                <input type="text" class="form-control"  name="lastname" id="lastname" placeholder="Last name">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6 col-sm-12">
                                <label for="dob">Date of birth</label>
                                <input type="date" name="dob" class="form-control" id="dob" placeholder="select date">
                            </div>
                            <div class="form-group col-md-6 col-sm-12">
                                <label for="pob">Place of birth</label>
                                <input type="text" name="pob" class="form-control" id="pob" placeholder="place of brith">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6 col-sm-12">
                                <label for="gender">Gender</label>
                                <select name="gender" id="gender" class="form-control">
                                    <option value="male" selected>Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6 col-sm-12">
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

                    <!-- Parents information -->
                    <fieldset class="parent-info">
                        <legend class="text-primary"><h4>Parents info</h4></legend><hr class="mt-0">

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
                    </fieldset>

                    <input type="submit" name="new-student" class="btn btn-primary btn-block mt-3" value="Create Account">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
