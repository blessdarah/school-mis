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
                <form action="/course" method="POST" class="form">
                    @csrf
                    <div class="form-group">
                        <label for="title">Subject title</label>
                        <input type="text" class="form-control" name="title" value="{{old('title')}}" id="title" placeholder="Subject title" required>
                        <span class="text-danger"><small>{{$errors->first("title")}}</small></span>
                    </div>
                    <div class="form-group">
                        <label for="code">Subject Code</label>
                        <input type="text" class="form-control" name="code" value="{{old('code')}}" id="code" placeholder="Subject code" required>
                        <span class="text-danger"><small>{{$errors->first("code")}}</small></span>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6 col-sm-12">
                            <label for="coefficient">Subject coefficient</label>
                        <input type="number" class="form-control" name="coefficient" value="{{old('coefficient')}}" id="coefficient" placeholder="Subject coefficient" required>
                            <span class="text-danger"><small>{{$errors->first("coefficient")}}</small></span>
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
                    <div class="form-group">
                        <button class="btn btn-outline-secondary" data-dismiss="modal">Cancel</button>
                        <button class="btn btn-primary" type="submit">Add Subject</button>
                    </div>
                </form>
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
                    <th>Coefficient</th>
                    <th>Teacher</th>
                    <th>Class</th>
                    <th>Options</th>
                </tr>
            </thead>
            <tbody>
                <?php $counter = 1; ?>
                @foreach ($courses as $course)
                <tr>
                    <td>{{$counter++}}</td>
                    <td>{{$course->title}}</span></td>
                    <td>{{$course->code}}</td>
                    <td>{{$course->coefficient}}</td>
                    <td>Bless Darah</td>
                    <td>Form 5B</td>
                    <td>
                        <a href="#" class="badge badge-secondary">edit</a>
                        <form action="/course/{{$course->id}}" method="POST" class="form d-inline">
                            @method('DELETE')
                            @csrf
                            <input type="submit" value="delete" class="btn btn-danger btn-sm p-0 px-2 border-0 rounded-pill">
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
