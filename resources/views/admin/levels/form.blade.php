<div class="form-group">
    <label for="class-name">Class name</label>
    <input type="text" class="form-control" name="name" id="class-name" placeholder="Class name" value="{{old('class-name') ?? $level->name ?? ''}}">
</div>
<div class="form-group">
    <label for="class-master">Class master/mistress</label>
    <select name="class-master" id="class-master" class="form-control">
        <option value="">Select teacher</option>
        <option value="1">Bless Darah</option>
        <option value="2">Leonel</option>
        <option value="3">Munjam Thomas</option>
    </select>
</div>
