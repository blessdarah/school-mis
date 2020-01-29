@extends('layouts/teacher')

@section('content')

<div class="card profile__staff-info col-md-8 col-lg-6 offset-md-2 offset-lg-3 mt-5 px-0">
    <div class="card-header">User Account settings</div>
        <form class="card-body form" method="POST" action="teacher/{{$teacher->id}}/edit">
        <button class="btn btn-primary mb-2" id="update-profile-btn"><i class="fa fa-info-circle"></i> Update info</button>
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
                    <input type="text" class="form-control" name="username" id="username" placeholder="username" value="{{$teacher->username}}" disabled>
                </div>
                <div class="form-group col-md-6">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="password" value="{{$teacher->password}}" pattern="[0-9a-zA-Z]+" disabled>
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
                    <input type="text" class="form-control" name="telephone" id="telephone" placeholder="telephone" value="{{$teacher->telephone}}" disabled>
                </div>
                <div class="form-group col-md-6">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="email" value="{{$teacher->email}}" disabled>
                </div>
                <div class="form-group col-md-6">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" name="address" id="address" placeholder="address" value="{{$teacher->address}}" disabled>
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success btn-block d-none" name="upadte-teacher-profile"><i class="fa fa-check"></i> Save updates</button>
            </div>
        </form>
    </div>

@endsection
