@extends('layouts/dashboard')

@section('content')
    <div class="card mx-lg-5">
        <div class="card-header">
            <h3 class="card-title text-center">Create Staff Account</h3>
        </div>
        <div class="card-body">
            <form action="staff" method="POST" class="form">
                @csrf
                <div class="form-row">
                    <div class="form-group col-sm-12 col-md-6 col-lg-4">
                        <small class="text-danger">{{$errors->first('firstname') }}</small>
                        <label for="firstname">First name<sup class="text-danger">*</sup></label>
                        <input type="text" class="form-control" name="firstname" id="firstname" placeholder="firstname" required>
                    </div>
                    <div class="form-group col-sm-12 col-md-6 col-lg-4">
                        <label for="lastname">Last name<sup class="text-danger">*</sup></label>
                        <input type="text" class="form-control" name="lastname" id="lastname" placeholder="lastname" required>
                    </div>

                    <div class="form-group col-sm-12 col-md-6 col-lg-4">
                        <label for="username">Username<sup class="text-danger">*</sup></label>
                        <input type="text" class="form-control" name="username" id="username" placeholder="username" required>
                    </div>
                    <div class="form-group col-sm-12 col-md-6 col-lg-4">
                        <label for="password">Password<sup class="text-danger">*</sup></label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="password" pattern="[0-9a-zA-Z]+" required>
                    </div>

                    <div class="form-group col-sm-12 col-md-6 col-lg-4">
                        <label for="gender">Gender</label>
                        <select name="gender" id="gender" class="form-control">
                            <option value="male" selected>Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>
                    <div class="form-group col-sm-12 col-md-6 col-lg-4">
                        <label for="telephone">Phone number</label>
                        <input type="text" class="form-control" name="telephone" id="telephone" placeholder="telephone">
                    </div>
                    <div class="form-group col-sm-12 col-md-6 col-lg-4">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="email">
                    </div>
                    <div class="form-group col-sm-12 col-md-6 col-lg-4">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" name="address" id="address" placeholder="address">
                    </div>
                    <div class="form-group col-sm-12 col-md-6 col-lg-4">
                        <label for="class">Assign class<sup class="text-danger">*</sup></label>
                        <select name="class" id="class" class="form-control" required>
                            <option value="none">Choose a class</option>
                            <option value="form1">Form 1A</option>
                            <option value="form3">Form 3B</option>
                            <option value="form4">Form 4A</option>
                            <option value="Form5">Form 5B</option>
                            <option value="form5">Form 5A</option>
                        </select>
                    </div>
                    <div class="form-group col-sm-12 col-md-6 col-lg-4">
                        <label for="subject">Subject/Speciality<sup class="text-danger">*</sup></label>
                        <select name="subject" id="subject" class="form-control" required>
                            <option value="none">Choose subject</option>
                            <option value="math">Mathematics</option>
                            <option value="phy">Physics</option>
                            <option value="chem">Chemistry</option>
                            <option value="bio">Biology</option>
                            <option value="lit">Literature in English</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary btn-block" value="Create Account">
                </div>
            </form>
        </div>
    </div>
    <a href="/admin/staff_management" class="btn btn-outline-primary px-5 ml-5 my-3">Back</a>
@endsection
