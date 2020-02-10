@extends('layouts.main')

@section('content')
<div class="mt-5 mb-3 mx-5 text-right">
    <a href="/admin/level/create" class="btn btn-success"><i class="fa fa-plus"></i> Add class</a>
</div>
    <div class="card mx-5">
        <div class="card-body p-0">
            <table class="table table-striped">
                <thead class="bg-light">
                    <tr>
                        <th>#</th>
                        <th>Class name</th>
                        <th>Class Master/Mistress</th>
                        <th>Options</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($levels as $index => $level)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $level->name }}</td>
                            <td>Bless Darah</td>
                            <td>
                                <a href="/admin/level/{{$level->id}}/edit" class="btn btn-sm btn-primary"><i class="fa fa-pencil"></i></a>
                                <form action="/admin/level/{{$level->id}}" method="POST" class="form d-inline-block">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" value="delete" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
@endsection
