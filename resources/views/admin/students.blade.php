@extends('admin/layouts.master')
@section('title', 'Student list')
@section('content')
<div class="row">
	<div class="col-md-8">
		{{-- active recorde here --}}
		<h3>Active Students</h3>
		<table class="table table-bordered">
			<thead class="thead-dark">
				<tr>
					<th>SL</th>
					<th>Name</th>
					<th>Deparment</th>
					<th>Age</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php $i=1;?>
				@forelse($active_students as $student)
				<tr>
					<td>{{sprintf("%02s",$i)}}</td>
					<td>{{$student->name}}</td>
					<td>{{$student->school->name}}</td>
					<td>{{$student->age}}</td>
					<td>
						<a class="btn btn-success btn-xs" href="{{url('student/edit', [$student->id])}}"><i class="fas fa-eye"></i></a> ||
						<a class="btn btn-success btn-xs" href="{{url('student/edit', [$student->id])}}"><i class="fas fa-edit"></i></a>
					</td>
				</tr>
				<?php $i++;?>
				@empty
				<tr>
					<td colspan="5"> No Record</td>
				</tr>
				@endforelse
			</tbody>
		</table>
		{{-- inactive record here --}}
		<h3>Inactive Students</h3>
		<table class="table table-bordered">
			<thead class="thead-dark">
				<tr>
					<th>SL</th>
					<th>Name</th>
					<th>Deparment</th>
					<th>Age</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php $i=1;?>
				@forelse($Inactive_students as $student)
				<tr>
					<td>{{sprintf("%02s",$i)}}</td>
					<td>{{$student->name}}</td>
					<td>{{$student->dep}}</td>
					<td>{{$student->age}}</td>
					<td>
						<a class="btn btn-success btn-xs" href="{{url('student/edit', [$student->id])}}"><i class="fas fa-eye"></i></a> ||
						<a class="btn btn-success btn-xs" href="{{url('student/edit', [$student->id])}}"><i class="fas fa-edit"></i></a>
					</td>
				</tr>
				<?php $i++;?>
				@empty
				<tr>
					<td colspan="5"> No Record</td>
				</tr>
				@endforelse
			</tbody>
		</table>
	</div>
	<div class="col-md-4">
		<form action="list" method="post">
			@csrf
			<div class="form-group">
				<label for="name">Name:</label>
				<input type="text" id="name" autocomplete="off" class="form-control" name="name" value="{{old('name')}}">
				<small id="namehelp" class="form-text text-danger">{{$errors->first('name')}}</small>
			</div>
			<div class="form-group">
				<label for="email">Email:</label>
				<input type="text" id="email" class="form-control" name="email" value="{{old('email')}}">
				<small class="form-text text-danger">{{$errors->first('email')}}</small>
			</div>
			<div class="form-group">
				<label for="dep">Department:</label>
				<input type="text" id="dep" class="form-control" name="dep" value="{{old('dep')}}">
				<small class="form-text text-danger">{{$errors->first('dep')}}</small>
			</div>
			<div class="form-group">
				<label for="age">Age:</label>
				<input type="text" id="age" class="form-control" name="age" value="{{old('age')}}">
				<small class="form-text text-danger">{{$errors->first('age')}}</small>
			</div>
			<div class="form-group">
				<label for="age">School:</label>
				<select class="form-control" name="school_id">
					@foreach($schools as $school)
					<option value="{{$school->id}}">{{$school->name}}</option>
					@endforeach
				</select>
				<small class="form-text text-danger">{{$errors->first('age')}}</small>
			</div>
			<div class="form-group">
				<label for="age">Status:</label><br>
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="radio" name="status" id="inlineRadio1" checked="true" value="Active">
					<label class="form-check-label" for="inlineRadio1">Active</label>
				</div>
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="radio" name="status" id="inlineRadio2" value="Inactive">
					<label class="form-check-label" for="inlineRadio2">Inactive</label>
				</div>
				<small class="form-text text-danger">{{$errors->first('status')}}</small>
			</div>
			<button type="submit" class="btn btn-sm btn-primary">Save</button>
		</form>
	</div>
</div>
@endsection