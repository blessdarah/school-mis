@csrf

<div class="form-row">
    <div class="form-group col-md-6 col-sm-12">
        <label for="firstname">First name</label>
        <input type="text" class="form-control" name="firstname" id="firstname" value="{{old('firstname') ?? $student->firstname ?? ''}}" placeholder="First name">
        <span class="text-danger my-2"><small>{{$errors->first('firstname')}}</small></span>
    </div>
    <div class="form-group col-md-6 col-sm-12">
        <label for="lastname">Last name</label>
        <input type="text" class="form-control"  name="lastname" id="lastname" value="{{old('lastname') ?? $student->lastname ?? ''}}" placeholder="Last name">
        <span class="text-danger my-2"><small>{{$errors->first('lastname')}}</small></span>
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-6 col-sm-12">
        <label for="dob">Date of birth</label>
        <input type="date" name="dob" class="form-control" id="dob" value="{{old('dob') ?? $student->dob ?? ''}}" placeholder="select date">
        <span class="text-danger my-2"><small>{{$errors->first('dob')}}</small></span>
    </div>
    <div class="form-group col-md-6 col-sm-12">
        <label for="pob">Place of birth</label>
        <input type="text" name="pob" class="form-control" id="pob" value="{{old('pob') ?? $student->pob ?? ''}}" placeholder="place of brith">
        <span class="text-danger my-2"><small>{{$errors->first('pob')}}</small></span>
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-6 col-sm-12">
        <label for="gender">Gender</label>
        <select name="gender" id="gender" class="form-control">
            <option value="{{$student->gender ?? ''}}">{{$student->gender ?? '--Choose--'}}</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select>
    </div>
    <div class="form-group col-md-6 col-sm-12">
        <label for="class">Admission class</label>
        <select name="class" id="class" class="form-control">
            <option value="null">Choose a class</option>
            <option value="form 1">Form 1</option>
            <option value="form 2">Form 2</option>
            <option value="form 3">Form 3</option>
            <option value="form 4">Form 4</option>
            <option value="form 5">Form 5</option>
        </select>
    </div>
</div>
