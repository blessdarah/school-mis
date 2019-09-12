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

<!-- Reminders section -->
<section id="reminders" class="d-flex flex-wrap">
    <?php for($count = 0; $count < 6; $count++): ?>
    <div class="card mt-3 mr-3" style="max-width: 18rem;">
      <div class="card-body">
          <p class="text-right text-secondary"><em>Tuesday Feb 4<sup>th</sup></em></p>
          <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem
              corrupti vero similique laudantium
          </p>
          <a href="#" class="card-link">mark as done</a>
      </div>
    </div>
    <?php endfor; ?>
</section>

@endsection
