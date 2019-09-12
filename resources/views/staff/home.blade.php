@extends('layouts/teacher')

@section('content')
    <!-- class section -->
    <div class="alert alert-info mt-5 w-75 mx-auto d-flex">
        <i class="fa fa-info-circle fa-3x mr-3"></i>
        <p class="mb-0">
            Every teacher should take note that there shall be a staff meeting tomorrow
            Your presence is highly requested.
            Thanks.
        </p>
    </div>
    <section id="class" class="row mt-5">
        <?php for($count = 0; $count < 6; $count++): ?>
        <div class="col-md-4 col-sm-6 col-xm-12 col-lg-3">
            <div class="card text-center bg-light mb-3">
                <div class="card-header text-uppercase">Form 3A</div>
                <div class="card-body">
                    <p>Subject title here</p>
                </div>
            </div>
        </div>
        <?php endfor; ?>
    </section>
@endsection
