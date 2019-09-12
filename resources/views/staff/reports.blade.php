@extends('layouts/teacher')

@section('content')
<div class="mt-5">
    <!-- Form to create new reminders -->
    <form action="#" class="form-inline mx-auto">
        <div class="form-group">
            <div class="input-group mr-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Reminder</span>
                </div>
                <input
                    type="text"
                    class="form-control"
                    placeholder="Add a reminder"
                />
            </div>
        </div>
        <div class="form-group">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">Remind me on</span>
                </div>
                <input type="date" class="form-control" />
            </div>
        </div>
        <input
            type="submit"
            value="Add new reminder"
            class="btn btn-success ml-3"
        />
    </form>
</div>
<div class="card mt-5">
    <div class="card-body p-0">
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
                    <td>Male</td>
                    <td><span class="badge badge-success">complete</span></td>
                    <td>Form 5B</td>
                    <td>
                        <a href="#" class="badge badge-info">view</a>
                        <a href="#" class="badge badge-secondary">edit</a>
                        <a href="#" class="badge badge-danger">delete</a>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Thomas Person</td>
                    <td>Male</td>
                    <td><span class="badge badge-warning">incomplete</span></td>
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
                    <td><span class="badge badge-warning">incomplete</span></td>
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
                    <td><span class="badge badge-success">complete</span></td>
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
                    <td><span class="badge badge-success">complete</span></td>
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
                    <td><span class="badge badge-warning">incomplete</span></td>
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
