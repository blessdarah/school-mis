@extends('layouts/teacher')

@section('content')

<div class="mt-5">
  <form action="#" class="form-inline mx-auto">
    <div class="form-group">
      <div class="input-group mr-3">
        <div class="input-group-prepend">
          <span class="input-group-text">Reminder</span>
        </div>
        <input type="text" class="form-control" placeholder="Add a reminder">
      </div>
    </div>
    <div class="form-group">
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text">Remind me on</span>
        </div>
        <input type="date" class="form-control">
      </div>
    </div>
    <input type="submit" value="Add new reminder" class="btn btn-success ml-3">
  </form>
</div>

@endsection
