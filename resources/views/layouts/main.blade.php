@include('includes/header')

<div class="container-fluid pl-0">
    <div class="row">
        <div class="col-lg-3 col-md-4 shadow bg-white pr-0 pb-5" id="sidebar">
            @section('sidebar')
                @include('includes/sidebar')
            @show
        </div>
        <div class="col-lg-9 col-md-8 px-3">
            @if(session()->has('message'))
                <div class="alert alert-success" role="alert">
                    {{ session()->get('message') }}
                </div>
            @endif
            @yield('content')
        </div>
    </div>
</div>
@include('includes/footer')
