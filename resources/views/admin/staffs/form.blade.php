<div class="form-row">
    <div class="form-group col-sm-12 col-md-6 col-lg-4">
        <small class="text-danger">{{$errors->first('firstname') }}</small>
        <label for="firstname">First name<sup class="text-danger">*</sup></label>
        <input type="text" class="form-control" name="firstname" id="firstname" placeholder="firstname" value="{{old('firstname') ?? $staff->firstname ?? ''}}">
    </div>
    <div class="form-group col-sm-12 col-md-6 col-lg-4">
        <label for="lastname">Last name<sup class="text-danger">*</sup></label>
        <input type="text" class="form-control" name="lastname" id="lastname" placeholder="lastname" value="{{old('lastname') ?? $staff->lastname ?? ''}}">
    </div>

    <div class="form-group col-sm-12 col-md-6 col-lg-4">
        <label for="username">Username<sup class="text-danger">*</sup></label>
        <input type="text" class="form-control" name="username" id="username" placeholder="username" value="{{old('username') ?? $staff->username ?? ''}}">
    </div>
    <div class="form-group col-sm-12 col-md-6 col-lg-4">
        <label for="password">Password<sup class="text-danger">*</sup></label>
        <input type="password" class="form-control" name="password" id="password" placeholder="password" pattern="[0-9a-zA-Z]+" value="{{$staff->password ?? ''}}">
    </div>

    <div class="form-group col-sm-12 col-md-6 col-lg-4">
        <label for="gender">Gender</label>
        <select name="gender" id="gender" class="form-control">
            <option value="male" selected>Male</option>
            <option value="female">Female</option>
        </select>
    </div>
    <div class="form-group col-sm-12 col-md-6 col-lg-4">
        <label for="phonenumber">Phone number</label>
        <input type="text" class="form-control" name="phonenumber" id="phonenumber" placeholder="telephone" value="{{old('phonenumber') ?? $staff->phonenumber ?? ''}}">
    </div>
    <div class="form-group col-sm-12 col-md-6 col-lg-4">
        <label for="email">Email address</label>
        <input type="email" class="form-control" name="email" id="email" placeholder="email" value="{{old('email') ?? $staff->email ?? ''}}">
    </div>
    <div class="form-group col-sm-12 col-md-6 col-lg-4">
        <label for="address">Address</label>
        <input type="text" class="form-control" name="address" id="address" placeholder="address" value="{{old('address') ?? $staff->address ?? ''}}">
    </div>
    <div class="form-group col-sm-12 col-md-6 col-lg-4">
        <label for="class">Assign class<sup class="text-danger">*</sup></label>
        <select name="class" id="class" class="form-control">
            @foreach ($levels as $level)
                <option value="{{$level->name}}">{{$level->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group col-sm-12 col-md-6 col-lg-4">
        <label for="subject">Subject/Speciality<sup class="text-danger">*</sup></label>
        <select name="subject" id="subject" class="form-control">
            <?php var_dump($courses); ?>
            @foreach ($courses as $course)
                <option value="{{$course->title}}">{{$course->title}} ({{$course->code}})</option>
            @endforeach
        </select>
    </div>
</div>
