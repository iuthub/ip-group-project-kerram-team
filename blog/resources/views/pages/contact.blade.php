@extends('layouts.main')
<link rel="stylesheet" href="/css/contact_us.css"/>

@section('content')
	<div class="contact-section">
			<h1> Leave Us Feedback!</h1>
			<div class="border"></div>
			<form class="contact-form" action="index.html" method="post">
				<input type="text" class="contact-form-text" placeholder="Your name">
				<input type="email" class="contact-form-text" placeholder="Your email">
				<input type="text" class="contact-form-text" placeholder="Your phone">
				<textarea class="contact-form-text" placeholder="Your message"></textarea>
				<input type="submit" class="contact-form-btn" value="Send">
			</form>
		</div>
@endsection