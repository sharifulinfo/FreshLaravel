@csrf
<div class="form-group">
	<label for="name">Name:</label>
	<input type="text" id="name" autocomplete="off" class="form-control" name="name" value="{{old('name') ?? $school->name}}">
	<small id="namehelp" class="form-text text-danger">{{$errors->first('name')}}</small>
</div>
<div class="form-group">
	<label for="phone">Phone:</label>
	<input type="text" id="phone" class="form-control" name="phone" value="{{old('phone') ?? $school->phone}}">
	<small class="form-text text-danger">{{$errors->first('phone')}}</small>
</div>
<div class="form-group d-flex flex-column">
	<label for="phone">Image:</label>
	<input type="file" name="image" class="py-2">
	<small class="form-text text-danger">{{$errors->first('image')}}</small>
</div>
<button type="submit" class="btn btn-lg btn-primary">Save</button>