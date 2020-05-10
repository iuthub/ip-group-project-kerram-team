@extends('layouts.main')
@section('content')
	
	@foreach($data as $elem)
	<div class ="alert alert-info">
		<h4>{{$elem->name}}</h4>
		<p>{{$elem->email}}</p>
		<h3>{{$elem->message}}</h3>
		<h4>Rating: {{$elem->rating}}</h4>
		<p><small>{{$elem->created_at}}</small></p>
	</div>

	@endforeach
@endsection
