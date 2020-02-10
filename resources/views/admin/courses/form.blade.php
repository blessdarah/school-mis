
@csrf
<div class="form-group">
    <label for="title">Subject title</label>
    <input type="text" class="form-control" name="title" value="{{old('title') ?? $course->title ?? ''}}" id="title" placeholder="Subject title" required>
    <span class="text-danger"><small>{{$errors->first("title")}}</small></span>
</div>
<div class="form-group">
    <label for="code">Subject Code</label>
    <input type="text" class="form-control" name="code" value="{{old('code') ?? $course->code ?? ''}}" id="code" placeholder="Subject code" required>
    <span class="text-danger"><small>{{$errors->first("code")}}</small></span>
</div>
<div class="form-row">
    <div class="form-group col-md-6 col-sm-12">
        <label for="coefficient">Subject coefficient</label>
    <input type="number" class="form-control" name="coefficient" value="{{old('coefficient') ?? $course->coefficient ?? ''}}" id="coefficient" placeholder="Subject coefficient" required>
        <span class="text-danger"><small>{{$errors->first("coefficient")}}</small></span>
    </div>
    <div class="form-group col-md-6 col-sm-12">
        <label for="class">Class taught</label>
        <select name="class" id="class" class="form-control">
            <option value="">Select a class</option>
            <option value="form2A">Form 2A</option>
            <option value="form1">Form 1</option>
            <option value="form5A">Form 5A</option>
            <option value="form3B">Form 3B</option>
        </select>
    </div>
</div>
<div class="form-group">
    <label for="teacher">Assign subject teacher</label>
    <select name="teacher" id="teacher" class="form-control">
        <option value="">Select teacher</option>
        <option value="1">Bless Darah</option>
        <option value="2">Leonel</option>
        <option value="3">Munjam Thomas</option>
    </select>
</div>

