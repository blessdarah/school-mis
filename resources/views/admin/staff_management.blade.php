@extends('layouts/dashboard')

@section('content')

<div class="mt-5 clearfix">
    <a href="/admin/add-staff" class="btn btn-success px-3 float-right"><i class="fa fa-plus"></i> Teacher</a>
</div>
<!-- Table of all students -->
<div class="card mt-2">
    <div class="card-body p-0">
        <table class="table table-striped">
            <thead class="bg-light">
                <tr>
                    <th>#</th>
                    <th>Teacher's name</th>
                    <th>Gender</th>
                    <th>Course</th>
                    <th>Class in charge</th>
                    <th>Options</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Bless Darah</td>
                    <td>Male</td>
                    <td>Chemistry</span></td>
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
                    <td>Physics</td>
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

<!-- pagination -->
<nav aria-label="Student navigation to load more content" class="mt-3 clearfix">
    <ul class="pagination float-right">
        <li class="page-item disabled"><a href="#" class="page-link">Prev</a></li>
        <li class="page-item"><a href="#" class="page-link">1</a></li>
        <li class="page-item"><a href="#" class="page-link">2</a></li>
        <li class="page-item"><a href="#" class="page-link">3</a></li>
        <li class="page-item"><a href="#" class="page-link">...</a></li>
        <li class="page-item"><a href="#" class="page-link">Next</a></li>
    </ul>
</nav>
@endsection
