@extends('layouts.main')

@section('content')

<div class="card mx-lg-5 mt-5">
    <div class="card-header">
       Create Staff Account
    </div>
    <div class="card-body">
        <form action="/admin/staff/{{$staff->id}}" method="POST" class="form">
            @csrf
            @method('PATCH')
            @include('admin/staffs/form')
            <div class="form-group">
                <a href="/admin/staff/" class="btn btn-warning mr-3">Cancel</a>
                <input type="submit" class="btn btn-primary" value="Update Account">
            </div>
        </form>
    </div>
</div>
@endsection
