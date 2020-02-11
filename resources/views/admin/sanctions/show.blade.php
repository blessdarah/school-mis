@extends('layouts.teacher')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-8 offset-2">
            <div class="card mt-5">
                <div class="card-header">
                    View sanction
                </div>
                <div class="card-body">
                    <p> <strong>Crime:</strong> {{$sanction->crime}} </p>
                    <p> <strong>Details:</strong> {{$sanction->details}} </p>
                    <p> <strong>Description:</strong> {{$sanction->description ?? "No details available"}} </p>
                    <a href="{{route('sanction.index')}}" class="btn btn-light">back</a>
                    <a href="/sanction/{{$sanction->id}}/edit" class="btn btn-success">Edit</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
