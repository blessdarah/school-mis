@extends('layouts/dashboard')

@section('content')

<div class="row">
    <div class="alert alert-info w-75 mx-auto mt-5">
        If student account does not exist, create one <span><a href="#" class="alert-link">here</a></span>
        <span class="btn close">&times;</span>
    </div>
   <div class="card col-md-10 col-lg-8 offset-md-1 offset-lg-2 mt-5 px-0">
       <div class="card-header text-center mx-0">
           <h3>Pay school fees</h3>
       </div>
       <div class="card-body">
            <form class="form">
                <div class="form-group">
                    <label for="class">Choose Student's class</label>
                    <select name="class" id="class" class="form-control">
                        <option value="null">Select student's class</option>
                        <option value="form2A">Form 2A</option>
                        <option value="form1">Form 1</option>
                        <option value="form5A">Form 5A</option>
                        <option value="form3B">Form 3B</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="class">Choose Student</label>
                    <select name="class" id="class" class="form-control">
                        <option value="null">Select student</option>
                       <option value="bless">Bless Darah</option>
                       <option value="leo">Leonel</option>
                       <option value="tom">Munjam Thomas</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="fees">School fee amount</label>
                    <div class="input-group">
                        <input type="number" class="form-control" name="fees" id="fees" placeholder="Enter amount" min="0">
                        <div class="input-group-append">
                            <label class="input-group-text">FCFA</label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-primary btn-block mt-2" value="Pay now">
                </div>
            </form>
       </div>
   </div>
</div>

@endsection
