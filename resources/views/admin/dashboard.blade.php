@extends('layouts/dashboard')

@section('content')
    <div class="card mt-5 mx-5">
        <div class="card-header">
            General stats
        </div>
        <div class="row card-body" id="main-dashboard">

            <div class="col-6 mb-4">
                <div class="card bg-dark text-white summary py-3">
                    <div class="card-body text-center">
                        <h1 class="card-title display-4">{{count($students)}}</h1>
                        <h5 class="card-subtitle">Students</h5>
                    </div>
                </div>
            </div>
            <div class="col-6 mb-4">
                <div class="card summary bg-primary text-white py-3">
                    <div class="card-body text-center">
                        <h1 class="card-title display-4">{{count($staffs)}}</h1>
                        <h5 class="card-subtitle">Teaching staff</h5>
                    </div>
                </div>
            </div>
            <div class="col-6 mb-4">
                <div class="card summary bg-success text-white py-3">
                    <div class="card-body text-center">
                        <h1 class="card-title display-4">{{count($classrooms)}}</h1>
                        <h5 class="card-subtitle">Classrooms</h5>
                    </div>
                </div>
            </div>
            <div class="col-6 mb-4">
                <div class="card summary bg-warning text-white py-3">
                    <div class="card-body text-center">
                        <h1 class="card-title display-4">218</h1>
                        <h5 class="card-subtitle">Fees pending</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
