@extends('layouts/main')

@section('content')
    {{-- Introducte main student's content --}}
    <div class="container mt-3">
      <div class="jumbotron mb-0">
        <h3>{{$student->firstname}} {{$student->lastname}}</h3>
        <p class="lead">{{$student->class}}</p>
      </div>
      {{-- Include the navigation for the student's page --}}
      @include('includes/student-nav')

      {{-- Sudent details here --}}
      <div class="row">
          <div class="col-md-6 offset-md-3">
              {{-- Personal information --}}
          <div class="card mb-3" id="personal-info">
                <div class="card-header">
                  Personal information
                </div>
                <div class="card-body">
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                      <strong class="text-secondary">First name: </strong> {{$student->firstname}}
                    </li>
                    <li class="list-group-item">
                      <strong class="text-secondary">Last name: </strong>{{$student->lastname}}
                    </li>
                    <li class="list-group-item">
                      <strong class="text-secondary">Class admitted: </strong> Form 3
                    </li>
                    <li class="list-group-item">
                      <strong class="text-secondary">Date of Birth: </strong> {{$student->dob}}
                    </li>
                    <li class="list-group-item">
                      <strong class="text-secondary">Date of Birth: </strong> {{$student->pob}}
                    </li>
                    <li class="list-group-item">
                      <strong class="text-secondary">Gender: </strong> {{$student->gender}}
                    </li>
                  </ul>
                </div>
              </div>

              {{-- Parent's or Guardian's information --}}
              <div class="card mb-3" id="parent-info">
                  <div class="card-header">Parent's/Guardian information</div>
                  <div class="card-body">
                      <ul class="list-group list-group-flush">
                          <li class="list-group-item"><strong class="text-secondary">Father's name: </strong><span>John Doe</span></li>
                          <li class="list-group-item"><strong class="text-secondary">Profession: </strong><span>Teacher</span></li>
                          <li class="list-group-item"><strong class="text-secondary">Address: </strong><span>Nkwen Bamenda</span></li>
                          <li class="list-group-item"><strong class="text-secondary">Telephone: </strong><span>672354897</span></li>
                          <li class="list-group-item"><strong class="text-secondary">Mother's name: </strong><span>Jane Doe</span></li>
                          <li class="list-group-item"><strong class="text-secondary">Profession: </strong><span>House wife</span></li>
                          <li class="list-group-item"><strong class="text-secondary">Address: </strong><span>Nkwen Bamenda</span></li>
                          <li class="list-group-item"><strong class="text-secondary">Telephone: </strong><span>698235145</span></li>
                      </ul>
                  </div>
              </div>

              {{-- Health Information --}}
              <div class="card mb-3" id="health-info">
                    <div class="card-header">Health Information</div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><strong class="text-secondary">Disabled: </strong><span>False</span></li>
                            <li class="list-group-item"><strong class="text-secondary">Name of Disability: </strong><span>None</span></li>
                            <li class="list-group-item"><strong class="text-secondary">Allegies: </strong><span>None</span></li>
                            <li class="list-group-item"><strong class="text-secondary">Family disease: </strong><span>Fungi</span></li>
                            <li class="list-group-item"><strong class="text-secondary">Blood Group: </strong><span>O+</span></li>
                            <li class="list-group-item"><strong class="text-secondary">Height: </strong><span>1.3m</span></li>
                            <li class="list-group-item"><strong class="text-secondary">Weight: </strong><span>67 Kg</span></li>
                        </ul>
                    </div>
                </div>

              {{-- School perfomance --}}
              <div class="card mb-3" id="performance">
                <div class="card-header">School Performance</div>
                <div class="card-body">
                  <table class="table table-responsive table-stripped">
                    <thead>
                      <td>#</td>
                      <td>Subject</td>
                      <td>Score (test + exams)</td>
                      <td>Strength</td>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>Chemistry</td>
                        <td>18</td>
                        <td><span class="badge badge-success">Excellent</span></td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>Physics</td>
                        <td>12</td>
                        <td><span class="badge badge-warning">Fair</span></td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td>Biological Sciences</td>
                        <td>16</td>
                        <td><span class="badge badge-primary">Good</span></td>
                      </tr>
                      <tr>
                        <td>4</td>
                        <td>Physics</td>
                        <td>12</td>
                        <td><span class="badge badge-warning">Fair</span></td>
                      </tr>
                      <tr>
                        <td>1</td>
                        <td>Chemistry</td>
                        <td>18</td>
                        <td><span class="badge badge-success">Excellent</span></td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>Physics</td>
                        <td>12</td>
                        <td><span class="badge badge-warning">Fair</span></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>

              {{-- Disciplinary report --}}
              <div class="card mb-3" id="discipline">
                  <div class="card-header">Disciplinary report</div>
                  <div class="card-body">Of good character</div>
              </div>
      </div>
    </div>
@endsection
