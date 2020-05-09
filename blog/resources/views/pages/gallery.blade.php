@extends('layouts.main')
@section('content')
	
	@foreach($data as $elem)
	<div class ="alert alert-info">
		<h3>{{$elem->message}}</h3>
		<h4>Rating: {{$elem->rating}}</h4>
		<p>{{$elem->email}}</p>
		<p><small>{{$elem->created_at}}</small></p>
		<a href="#"><button class="btn btn-warning">More</button></a>
	</div>

	@endforeach
@endsection
