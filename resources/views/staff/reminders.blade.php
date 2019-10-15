@extends('layouts/teacher')

@section('content')
<div class="mt-5">
    <!-- Form to create new reminders -->
    <form action="reminders" method="post" class="form-inline mx-auto">
        @csrf
        <div class="form-group">
            <div class="input-group mr-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Reminder</span>
                </div>
                <input
                    type="text"
                    class="form-control"
                    placeholder="Add a reminder"
                    name="content"
                    value="{{ old('dure-date') }}"
                />
            </div>
            <div class="text-danger">{{ $errors->first('content') }}</div>
        </div>
        <div class="form-group">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">Remind me on</span>
                </div>
                <input type="date" class="form-control" name="dure-date" value="{{ old('dure-date') }}" />
            </div>
            <div class="text-danger">{{ $errors->first('dure-date') }}</div>
        </div>
        <input
            type="submit"
            value="Add new reminder"
            class="btn btn-success ml-3"
        />
    </form>
</div>

<!-- Reminders section -->
<section id="reminders" class="d-flex flex-wrap">
    @foreach ($reminders as $reminder)
        <div class="card mt-3 mr-3" style="max-width: 18rem;">
            <div class="card-body">
            <p class="text-right text-secondary"><em>{{ $reminder->dure_date }}</em></p>
                <p>
                   {{ $reminder->content }}
                </p>
                <a href="#" class="card-link">mark as done</a>
            </div>
        </div>
    @endforeach
</section>

@endsection
