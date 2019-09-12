@extends('layouts/teacher')

@section('content')
<div class="mt-5 mx-2">
  {{-- Overlay form to add a sanction  --}}
  <div class="modal fade" id="new-sanction" tabindex="-1" aria-lable="New sanction" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="text-center modal-title">Add a new disciplinary report</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-lable="Close"><span>&times;</span></button>
                </div>
                <div class="modal-body">
                    <form action="#" class="form">
                        <div class="form-group">
                            <label for="title">Crime commmitted</label>
                            <input type="text" class="form-control" name="title" id="title" placeholder="Subject title" required>
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
                            <input type="date" class="form-control">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-outline-secondary">Close</button>
                    <button class="btn btn-primary">Add sactions </button>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="clearfix"><a href="#" class="btn btn-success float-right px-3" data-toggle="modal" data-target="#new-sanction"><i class="fa fa-plus"></i> New sanction</a></div><hr />

{{-- Table to show all sanctions --}}
<div class="card px-0 mt-2">
  <div class="card-body p-0">
      <table class="table table-striped">
          <thead class="bg-light">
              <td><strong>#</strong></td>
              <td><strong>Student name</strong></td>
              <td><strong>Crime committed</strong></td>
              <td><strong>Gravity</strong></td>
              <td><strong>Date</strong></td>
              <td><strong>Sanction</strong></td>
              <td><strong>Options</strong></td>
          </thead>
          <tbody>
              <tr>
                  <td>1</td>
                  <td>Bless Darah</td>
                  <td>Slaped a teacher</td>
                  <td class="text-danger">Serious</td>
                  <td>March 03</td>
                  <td>Dismissal</td>
                  <td>
                      <a href="#"><span class="badge badge-primary">view</span></a>
                      <a href="#"><span class="badge badge-success">edit</span></a>
                      <a href="#"><span class="badge badge-danger">delete</span></a>
                  </td>
              </tr>
              <tr>
                  <td>2</td>
                  <td>Sonkey Victor</td>
                  <td>Cheating in exam</td>
                  <td class="text-danger">Serious</td>
                  <td>March 03</td>
                  <td>Dismissal</td>
                  <td>
                      <a href="#"><span class="badge badge-primary">view</span></a>
                      <a href="#"><span class="badge badge-success">edit</span></a>
                      <a href="#"><span class="badge badge-danger">delete</span></a>
                  </td>
              </tr>
          </tbody>
      </table>
  </div>
</div>
</div>

@endsection
