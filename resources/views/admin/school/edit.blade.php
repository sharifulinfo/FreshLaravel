@extends('admin/layouts.master')
@section('title','Edit School')
@section('content')
<form action="/schools/{{$school->id}}" method="POST" enctype="multipart/form-data">
	@method('PATCH') 
	@include('admin.school.schoolForm');
</form>
@endsection