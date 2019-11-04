@extends('layouts/dashboard')

@section('content')
<div class="row py-5">
<!-- Create new student form -->
    <div class="col-lg-8 offset-lg-2 col-sm-12">
        <div class="card" id="form__register">
            <div class="card-header text-center">
                <h3>Edit student account</h3>
            </div>
            <div class="card-body">
                <form class="form" method="POST" action="/student">
                    <!-- personal info -->
                    @csrf
                    @method('PATCH')
                    <fieldset class="personal-info mb-3">
                        <legend class="text-primary"><h4>Personal information</h4></legend><hr class="mt-0">

                        <div class="form-row">
                            <div class="form-group col-md-6 col-sm-12">
                                <label for="firstname">First name</label>
                                <input type="text" class="form-control" name="firstname" id="firstname" value="{{$student->firstname}}" placeholder="First name">
                                <span class="text-danger my-2"><small>{{$errors->first('firstname')}}</small></span>
                            </div>
                            <div class="form-group col-md-6 col-sm-12">
                                <label for="lastname">Last name</label>
                                <input type="text" class="form-control"  name="lastname" id="lastname" value="{{$student->lastname}}" placeholder="Last name">
                                <span class="text-danger my-2"><small>{{$errors->first('lastname')}}</small></span>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6 col-sm-12">
                                <label for="dob">Date of birth</label>
                                <input type="date" name="dob" class="form-control" id="dob" value="{{$student->dob}}" placeholder="select date">
                                <span class="text-danger my-2"><small>{{$errors->first('dob')}}</small></span>
                            </div>
                            <div class="form-group col-md-6 col-sm-12">
                                <label for="pob">Place of birth</label>
                                <input type="text" name="pob" class="form-control" id="pob" value="{{$student->pob}}" placeholder="place of brith">
                                <span class="text-danger my-2"><small>{{$errors->first('pob')}}</small></span>
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

                    <input type="submit" name="new-student" class="btn btn-primary btn-block mt-3" value="Update student info">
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
