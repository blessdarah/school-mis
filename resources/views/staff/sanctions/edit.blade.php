@extends('layouts.teacher')

@section('content')

<div class="row">
        <div class="col-8 offset-2">
            <div class="card mt-5">
                <div class="card-header">
                    Edit sanction
                </div>
                <div class="card-body">
                    <form action="/sanction/{{$sanction->id}}" class="form" method="POST">
                        <!-- select the method of sending the data -->
                        @csrf
                        @method('PATCH')
                      <div class="form-group">
                          <label for="crime">Crime commmitted</label>
                          <input type="text" class="form-control" name="crime" id="crime" placeholder="Subject title" value="{{$sanction->crime}}" required>
                      </div>
                      <div class="form-row">
                          <div class="form-group col-md-6 col-sm-12">
                              <label for="class">Class of Student</label>
                              <select name="class" id="class" class="form-control">
                                  <option value="">Select a class</option>
                                  <option value="form2A">Form 2A</option>
                                  <option value="form1">Form 1</option>
                                  <option value="form5A">Form 5A</option>
                                  <option value="form3B">Form 3B</option>
                              </select>
                          </div>
                          <div class="form-group col-md-6 cold-sm-12">
                              <label for="teacher">Student(s) involved</label>
                              <select name="teacher" id="teacher" class="form-control">
                                  <option value="">Select teacher</option>
                                  <option value="1">Bless Darah</option>
                                  <option value="2">Leonel</option>
                                  <option value="3">Munjam Thomas</option>
                              </select>
                          </div>
                      </div>
                      <div class="form-group">
                          <label for="details">Crime details</label>
                          <textarea name="details" id="details" cols="10" rows="5" class="form-control">{{$sanction->details}}
                          </textarea>
                      </div>
                      <div class="form-group">
                          <label for="crime-date">Date</label>
                          <input type="date" name="date" class="form-control" value="{{$sanction->date}}">
                      </div>
                      <a href="/sanction" class="btn btn-light mr-2 shadow-sm">Cancel</a>
                      <button type="submit" name="sanction" class="btn btn-danger px-3">Update sanction</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
