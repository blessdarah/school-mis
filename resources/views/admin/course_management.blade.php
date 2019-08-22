@extends ('layouts/dashboard')


@section('content')

<!-- TODO: Add modal to add and manage courses -->
<div class="mt-5 clearfix">
    <button class="btn btn-success px-3 float-right" data-toggle="modal" data-target="#course-modal"><i class="fa fa-plus"></i> Add Subject</button>
</div>
{{-- Modal to add course --}}
<div class="modal fade" id="course-modal" tabindex="-1" aria-lable="New course" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="text-center modal-title">Add a course</h5>
                <button class="close" type="button" data-dismiss="modal" aria-lable="Close"><span>&times;</span></button>
            </div>
            <div class="modal-body">
                <form action="#" class="form">
                    <div class="form-group">
                        <label for="title">Subject title</label>
                        <input type="text" class="form-control" name="title" id="title" placeholder="Subject title" required>
                    </div>
                    <div class="form-group">
                        <label for="code">Subject Code</label>
                        <input type="text" class="form-control" name="code" id="code" placeholder="Subject code" required>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6 col-sm-12">
                            <label for="coefficient">Subject coefficient</label>
                            <input type="number" class="form-control" name="coefficient" id="coefficient" placeholder="Subject coefficient" required>
                        </div>
                        <div class="form-group col-md-6 col-sm-12">
                            <label for="class">Class taught</label>
                            <select name="class" id="class" class="form-control">
                                <option value="">Select a class</option>
                                <option value="form2A">Form 2A</option>
                                <option value="form1">Form 1</option>
                                <option value="form5A">Form 5A</option>
                                <option value="form3B">Form 3B</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="teacher">Assign subject teacher</label>
                        <select name="teacher" id="teacher" class="form-control">
                            <option value="">Select teacher</option>
                            <option value="1">Bless Darah</option>
                            <option value="2">Leonel</option>
                            <option value="3">Munjam Thomas</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-outline-secondary">Close</button>
                <button class="btn btn-primary">Add Subject</button>
            </div>
        </div>
    </div>
</div>


<!-- Table of all teachers -->
<div class="card mt-2">
    <div class="card-body p-0" id="all-teachers">
        <table class="table table-striped">
            <thead class="bg-light">
                <tr>
                    <th>#</th>
                    <th>Subject</th>
                    <th>Code</th>
                    <th>Teacher</th>
                    <th>Class</th>
                    <th>Options</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Chemistry</span></td>
                    <td>CHEM 202</td>
                    <td>Bless Darah</td>
                    <td>Form 5B</td>
                    <td>
                        <a href="#" class="badge badge-info">view</a>
                        <a href="#" class="badge badge-secondary">edit</a>
                        <a href="#" class="badge badge-danger">delete</a>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Physics</td>
                    <td>PHY 210</td>
                    <td>Thomas Person</td>
                    <td>Form 5B</td>
                    <td>
                        <a href="#" class="badge badge-info">view</a>
                        <a href="#" class="badge badge-secondary">edit</a>
                        <a href="#" class="badge badge-danger">delete</a>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Sonkey Victor</td>
                    <td>Male</td>
                    <td>Mathematics</td>
                    <td>Form 3A</td>
                    <td>
                        <a href="#" class="badge badge-info">view</a>
                        <a href="#" class="badge badge-secondary">edit</a>
                        <a href="#" class="badge badge-danger">delete</a>
                    </td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Jane Doe</td>
                    <td>Female</td>
                    <td>Hitory</td>
                    <td>Form 5B</td>
                    <td>
                        <a href="#" class="badge badge-info">view</a>
                        <a href="#" class="badge badge-secondary">edit</a>
                        <a href="#" class="badge badge-danger">delete</a>
                    </td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Awah Patience</td>
                    <td>Female</td>
                    <td>Literature in English</td>
                    <td>Form 2C</td>
                    <td>
                        <a href="#" class="badge badge-info">view</a>
                        <a href="#" class="badge badge-secondary">edit</a>
                        <a href="#" class="badge badge-danger">delete</a>
                    </td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>James Tucker</td>
                    <td>Male</td>
                    <td>French language</td>
                    <td>Form 1A</td>
                    <td>
                        <a href="#" class="badge badge-info">view</a>
                        <a href="#" class="badge badge-secondary">edit</a>
                        <a href="#" class="badge badge-danger">delete</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@endsection
