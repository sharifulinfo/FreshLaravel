@extends('admin/layouts.master')
@section('title','Add School')
@section('content')
<form action="/schools" method="post">
	@include('admin.school.schoolForm');
</form>
@endsection