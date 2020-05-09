@extends('layouts.main')
<link rel="stylesheet" href="css/contact_us.css"/>
@section('content')
<div class = "contact-section">
	<h1> Leave Us Feedback!</h1>
	<form class="contact-form" action="{{route('contact-form')}}" method="post" >
		@csrf
		@include('pages.messages')
		<div class = "form-group">
			<label for="name" class="labelfont">Enter your name</label>
			<input type="text" name = "name" placeholder ="Enter your name" id = "name" class= "contact-form-text">
		</div>
		<div>
			<label for="email" class="labelfont">E-mail</label>
			<input type="email" name ="e-mail" placeholder="E-mail" id = "e-mail" class= "contact-form-text">
		</div>
		<div>
			<label for="phone" class="labelfont">Phone number (#######)</label>
			<input type="text" name="phone" placeholder="#######" id = "phone" class="contact-form-text" patter="[0-9999999]">
		</div>
		<div>
			<label for="rating" class="labelfont">Rating</label>
			<input type="text" name="rating" placeholder="Enter rating from 0 to 5" id="rating" class="contact-form-text">
		</div>
		<div>
			<label for="message" class="labelfont">Your feedback</label>
			<textarea name="message" id="message" placeholder="Message" class ="contact-form-text"></textarea>
		</div>
		
		<button type ="submit " class = "contact-form-btn">Send</button>
		
	</form>
</div>
@endsection