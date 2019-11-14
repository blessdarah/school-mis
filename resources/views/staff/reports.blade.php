@extends('layouts/teacher')

@section('content')
<div class="mt-5">
    <!-- Form to create new reminders -->
    <form action="#" class="form-inline mx-auto">
        @csrf

        <div class="form-group">
            <div class="input-group mr-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Select class</span>
                </div>
                <select name="term" id="term" class="form-control form-select custom-select">
                    <option value="1">Form 3</option>
                    <option value="2">Second term</option>
                    <option value="3">Third term</option>
                </select>
            </div>
        </div>

        <div class="form-group">
            <div class="input-group mr-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Term</span>
                </div>
                <select name="term" id="term" class="form-control form-select custom-select">
                    <option value="1">First term</option>
                    <option value="2">Second term</option>
                    <option value="3">Third term</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">Subject</span>
                </div>
                <select name="subject" id="subject" class="form-control form-select custom-select">
                    <option value="1">Chemistry </option>
                    <option value="2">Biology </option>
                    <option value="3">Mathematics</option>
                </select>
            </div>
        </div>
        <input
            type="submit"
            value="Submit"
            class="btn btn-primary ml-3"
        />
    </form>
</div>
<div class="card mt-5">
    <h5 class="py-2 pl-3">Enter marks for Chemistry</h5>
    <div class="card-body p-0">
        <form action="">
            @csrf
            <table class="table table-striped">
                <thead class="bg-light">
                    <tr>
                        <th>#</th>
                        <th>Student name</th>
                        <th>Test 1</th>
                        <th>Test 2</th>
                        <th>Exam mark</th>
                        <th>Options</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Bless Darah</td>
                        <td><input type="number" max="20" min="0" name="test1[]" placeholder="mark/20" class="form-control"></td>
                        <td><input type="number" max="20" min="0" name="test2[]" placeholder="mark/20" class="form-control"></td>
                        <td><input type="number" max="20" min="0" name="exam[]" placeholder="mark/20" class="form-control"></td>
                        <td>
                           <button class="btn btn-primary px-3">save</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
    </div>
</div>
@endsection
