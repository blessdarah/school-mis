@extends('layouts/main')

@section('content')
    <div class="container mt-5">
       <div class="row">
           <div class="col-lg-4 col-md-6 col-sm-12 offset-lg-4 offset-md-3">
               @if (count($errors) > 0)
                   <div class="alert alert-danger">
                      @foreach ($errors as $error)
                        <p>{{$error}}</p>
                      @endforeach
                   </div>
               @endif
                <div class="card shadow" id="form__login">
                    <div class="card-header text-center border-0 bg-white mt-4">
                        <h3>Account login</h3>
                    </div>
                    <div class="card-body pb-5">
                        <form action="/login" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="username"><i class="fa fa-user text-primary"></i> Username</label>
                                <input type="text" name="name"
                                    class="form-control"
                                    value="{{old('username')}}" required>
                            </div>

                            <div class="form-group">
                                <label for="password"><i class="fa fa-lock text-primary"></i> Password</label>
                                <input type="password" name="password" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <div class="form-check d-inline-block">
                                    <input type="checkbox" class="form-check-input" name="remember-me" id="remember-me">
                                    <label for="remember-me" class="form-check-label">Remember me</label>
                                </div>
                                <a href="#" class="card-link float-right">Forgotten password</a>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary btn-block" value="Login">
                            </div>
                        </form>
                    </div>
                </div>
           </div>
       </div>
    </div>
@endsection
