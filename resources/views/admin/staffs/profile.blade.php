@extends('layouts/main')

@section('content')

<div class="card mt-5 mx-5">
    <div class="card-header">
        Profile info of:<strong> {{$teacher->firstname}} {{$teacher->lastname}}</strong>
    </div>
    <form class="card-body form profile__staff-info" method="POST" action="/admin/staff/{{$teacher->id}}">
        @csrf
        @method('PATCH')

        <a href="/admin/staff" class="btn btn-warning mb-2">cancel</a>
        <button class="btn btn-primary mb-2" id="update-profile-btn">Update info</button>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="firstname">First name</label>
                <input type="text" class="form-control" value="{{$teacher->firstname}}" disabled>
            </div>
            <div class="form-group col-md-6">
                <label for="lastname">Last name</label>
                <input type="text" class="form-control" value="{{$teacher->lastname}}" disabled>
            </div>
            <div class="form-group col-md-6">
                <label for="username">Username</label>
                <input type="text" class="form-control" value="{{$teacher->username}}" name="username" id="username" placeholder="username" disabled>
            </div>
            <div class="form-group col-md-6">
                <label for="password">Password</label>
                <input type="password" class="form-control" value="{{$teacher->password}}" name="password" id="password" placeholder="password" pattern="[0-9a-zA-Z]+" disabled>
            </div>

            <div class="form-group col-md-6">
                <label for="gender">Gender</label>
                <select name="gender" id="gender" class="form-control" disabled>
                    @if ($teacher->gender == "male")
                        <option value="male" selected>Male</option>
                    @else
                        <option value="female" selected>Female</option>
                    @endif
                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="telephone">Phone number</label>
                <input type="text" class="form-control" value="{{$teacher->phonenumber}}" name="telephone" id="telephone" value="(+237) 672374414" placeholder="telephone" disabled>
            </div>
            <div class="form-group col-md-6">
                <label for="email">Email address</label>
                <input type="email" class="form-control" value="{{$teacher->email}}" name="email" id="email" placeholder="email" value="blessdarah@gmail.com" disabled>
            </div>
            <div class="form-group col-md-6">
                <label for="address">Address</label>
                <input type="text" class="form-control" value="{{$teacher->address}}" name="address" id="address" placeholder="address" value="Bambili, Bamenda" disabled>
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
            <button type="submit" class="btn btn-success btn-block d-none" name="update-teacher-profile">Save updates</button>
        </div>
    </form>
</div>

@endsection
