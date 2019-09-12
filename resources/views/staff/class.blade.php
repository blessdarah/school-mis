@extends('layouts/teacher')

@section('content')
    <!-- class section -->
<section id="class" class="d-flex flex-wrap">
    <?php for($count = 0; $count < 6; $count++): ?>
    <div class="card mt-3 mr-3" style="max-width: 18rem;">
      <div class="card-body text-center">
          <h3>Pure maths statistics</h3>
          <p>Form 3A</p>
      </div>
    </div>
    <?php endfor; ?>
</section>
@endsection
