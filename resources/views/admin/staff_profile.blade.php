@extends('layouts/main')

@section('content')
    <div class="container">
        <div class="jumbotron text-center mb-2 mt-5">
            <img src="{{asset('images/bless.jpg')}}" alt="Profile image of teacher" class="rounded-circle img-fluid shadow staff__profile-image">
            <h5 class="mt-3">Bless Darah</h5>
            <p class="lead">Computer Sciences</p>
        </div>
        <div class="row mt-1 mb-4">
            <!-- Teacher's profile page -->
            <div class="card profile__staff-info col-md-8 col-lg-6 offset-md-2 offset-lg-3 ">
                <form class="card-body form">
                <button class="btn btn-primary mb-2" id="update-profile-btn">Update info</button>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="firstname">First name</label>
                            <input type="text" class="form-control" value="Bless" disabled>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="lastname">Last name</label>
                            <input type="text" class="form-control" value="Darah" disabled>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" name="username" id="username" placeholder="username" disabled>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="password" pattern="[0-9a-zA-Z]+" disabled>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="gender">Gender</label>
                            <select name="gender" id="gender" class="form-control" disabled>
                                <option value="male" selected>Male</option>
                                <option value="male">Female</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="telephone">Phone number</label>
                            <input type="text" class="form-control" name="telephone" id="telephone" value="(+237) 672374414" placeholder="telephone" disabled>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="email">Email address</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="email" value="blessdarah@gmail.com" disabled>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="address">Address</label>
                            <input type="text" class="form-control" name="address" id="address" placeholder="address" value="Bambili, Bamenda" disabled>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="class">Assign class</label>
                            <select name="class" id="class" class="form-control" disabled>
                                <option value="none">Choose a class</option>
                                <option value="form1">Form 1A</option>
                                <option value="form3">Form 3B</option>
                                <option value="form4" selected>Form 4A</option>
                                <option value="Form5">Form 5B</option>
                                <option value="form5">Form 5A</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="subject">Subject/Speciality</label>
                            <select name="subject" id="subject" class="form-control" disabled>
                                <option value="none">Choose subject</option>
                                <option value="math" selected>Computer Sciences</option>
                                <option value="phy">Physics</option>
                                <option value="chem">Chemistry</option>
                                <option value="bio">Biology</option>
                                <option value="lit">Literature in English</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success btn-block d-none" name="upadte-teacher-profile">Save updates</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
