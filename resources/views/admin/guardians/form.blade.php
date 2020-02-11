<div class="form-row">
    <div class="form-group col-md-6 col-sm-12">
        <label for="fathers_name">Father's name</label>
        <input type="text" class="form-control" name="fathers_name" id="fathers_name" value="{{ old('fathers_name') ?? $guardian->fathers_name ?? '' }}" placeholder="Enter name">
        <small class="text-danger">{{$errors->first('fathers_name') }}</small>
    </div>
    <div class="form-group col-md-6 col-sm-12">
        <label for="mothers_name">Mother's name</label>
        <input type="text" class="form-control" name="mothers_name" id="mothers_name" value="{{ old('mothers_name') ?? $guardian->mothers_name ?? '' }}" placeholder="Enter name">
        <small class="text-danger">{{$errors->first('mothers_name') }}</small>
    </div>
    <div class="form-group col-md-6 col-sm-12">
        <label for="fathers_contact">Father's contact</label>
        <input type="tel" class="form-control" name="fathers_contact" id="fathers_contact" value="{{ old('fathers_contact') ?? $guardian->fathers_contact ?? '' }}" placeholder="(+237) xxx xxx xxx">
        <small class="text-danger">{{$errors->first('fathers_contact') }}</small>
    </div>
    <div class="form-group col-md-6 col-sm-12">
        <label for="mothers_contact">Mother's contact</label>
        <input type="tel" class="form-control" name="mothers_contact" id="mothers_contact" value="{{ old('mothers_contact') ?? $guardian->mothers_contact ?? '' }}" placeholder="(+237) xxx xxx xxx">
        <small class="text-danger">{{$errors->first('mothers_contact') }}</small>
    </div>


    <div class="form-group col-md-6 col-sm-12">
        <label for="fathers_profession">Father's profession</label>
        <input type="text" class="form-control" name="fathers_profession" id="fathers_profession" value="{{ old('fathers_profession') ?? $guardian->fathers_profession ?? '' }}" placeholder="Profession?">
        <small class="text-danger">{{$errors->first('fathers_profession') }}</small>
    </div>
    <div class="form-group col-md-6 col-sm-12">
        <label for="mothers_profession">Mother's profession</label>
        <input type="text" class="form-control" name="mothers_profession" id="mothers_profession" value="{{ old('mothers_profession') ?? $guardian->mothers_profession ?? '' }}" placeholder="Profession?">
        <small class="text-danger">{{$errors->first('mothers_profession') }}</small>
    </div>

    <div class="form-group col-md-6 col-sm-12">
        <label for="fathers_address">Father's address</label>
        <input type="text" class="form-control" name="fathers_address" id="fathers_address" value="{{ old('fathers_address') ?? $guardian->fathers_address ?? '' }}" placeholder="Town/village - Region">
        <small class="text-danger">{{$errors->first('fathers_address') }}</small>
    </div>
    <div class="form-group col-md-6 col-sm-12">
        <label for="mothers_address">Mother's address</label>
        <input type="text" class="form-control" name="mothers_address" id="mothers_address" value="{{ old('mothers_address') ?? $guardian->mothers_address ?? '' }}" placeholder="Town/village - Region">
        <small class="text-danger">{{$errors->first('mothers_address') }}</small>
    </div>
</div>
