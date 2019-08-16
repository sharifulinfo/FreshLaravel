@extends('admin.layouts.master')
@section('title','School Details')
@section('content')
	<table class="table table-striped">
		<tr>
			<td width="100">Name</td>
			<td width="5">:</td>
			<td>{{$school->name}}</td>
		</tr>
		<tr>
			<td width="100">Phone</td>
			<td width="5">:</td>
			<td>{{$school->phone}}</td>
		</tr>
		<tr>
			<td colspan="3" class="text-right">
				<a href="/schools/{{$school->id}}/edit" class="btn btn-sm btn-primary">Edit</a>
				<form accept="/schools/{{$school->id}}" method="POST">
					@csrf
					@method("DELETE");
					<button class="btn btn-sm btn-warning">Delete</button>
				</form>
			</td>
		</tr>
	</table>
@endsection