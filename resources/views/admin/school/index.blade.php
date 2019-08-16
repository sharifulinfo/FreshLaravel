@extends('admin/layouts.master')
@section('title', 'Student list')
@section('content')
<a href="schools/create" class="btn btn-success btn-sm">Add new</a>
<table class="table table-bordered">
			<thead class="thead-dark">
				<tr>
					<th>SL</th>
					<th>Name</th>
					<th>Phone</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php $i=1;?>
				@forelse($schools as $school)
				<tr>
					<td>{{sprintf("%02s",$i)}}</td>
					<td>{{$school->name}}</td>
					<td>{{$school->phone}}</td>
					<td>
						<a class="btn btn-sm btn-success" href="{{url('schools/'.$school->id)}}"><i class="fas fa-eye"></i></a>
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
@endsection