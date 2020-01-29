@extends('layouts/teacher')

@section('content')
<div class="mt-5 mx-2">
    <a href="{{route('sanction.create')}}" class="btn btn-success px-3">Add sanction</a>
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

                @foreach($sanctions as $sanction)
                  <tr>
                      <td>1</td>
                      <td>Bless Darah</td>
                      <td>{{$sanction->crime}}</td>
                      <td class="text-danger">Serious</td>
                      <td>{{$sanction->created_at}}</td>
                      <td>Dismissal</td>
                      <td>
                          <a href="sanction/{{$sanction->id}}"><span class="badge badge-primary">view</span></a>
                          <a href="sanction/{{$sanction->id}}/edit"><span class="badge badge-success">edit</span></a>
                         <form action="sanction/{{$sanction->id}}" method="POST" class="form-inline">
                            @csrf
                            @method('DELETE')
                            <button class="badge badge-danger border-0">delete</button>
                        </form>
                      </td>
                  </tr>
                  @endforeach

          </tbody>
      </table>
  </div>
</div>
</div>

@endsection
