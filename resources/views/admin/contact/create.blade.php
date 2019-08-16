@extends('admin/layouts.master')
@section('title','Edit School')
@section('content')
<form action="/contacts" method="POST">
	@csrf
	<div class="form-group">
		<label for="name">Name:</label>
		<input type="text" id="name" autocomplete="off" class="form-control" name="name" value="{{old('name') }}">
		<small id="namehelp" class="form-text text-danger">{{$errors->first('name')}}</small>
	</div>
	<div class="form-group">
		<label for="phone">Phone:</label>
		<input type="text" id="phone" class="form-control" name="phone" value="{{old('phone') }}">
		<small class="form-text text-danger">{{$errors->first('phone')}}</small>
	</div>
	<div class="form-group">
		<label for="phone">Message:</label>
		<textarea rows="10" class="form-control" name="message"> {{old('message') }} </textarea>
		<small class="form-text text-danger">{{$errors->first('message')}}</small>
	</div>
	<button type="submit" class="btn btn-lg btn-primary">Send</button>
</form>
@endsection