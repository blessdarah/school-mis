
@extends('layouts/teacher')

@section('content')
    <div class="row">
        <div class="col-8 offset-2">
            <div class="card mt-5">
                <div class="card-header">
                    <h5>Add new sanction</h5>
                </div>
                <div class="card-body">
                    <form action="/sanction" class="form" method="POST">
                        <!-- select the method of sending the data -->
                        @csrf
                        @method('POST')
                      <div class="form-group">
                          <label for="crime">Crime commmitted</label>
                          <input type="text" class="form-control" name="crime" id="crime" placeholder="Subject title" required>
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
                          <textarea name="details" id="details" cols="10" rows="5" class="form-control"></textarea>
                      </div>
                      <div class="form-group">
                          <label for="crime-date">Date</label>
                          <input type="date" name="date" class="form-control">
                      </div>
                      <a href="/sanction" class="btn btn-light shadow-sm px-2 mr-2">Cancel</a>
                      <button type="submit" name="sanction" class="btn btn-danger px-3">Add sanction</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
