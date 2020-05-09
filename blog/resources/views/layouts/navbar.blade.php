
<style type="text/css">
	.navbar {
		background-color: #27496d;
	}
</style>
<nav class="navbar navbar-expand-lg navbar-dark   sticky-top ">
	<a href="{{route('MainPage')}}" class="navbar-brand">
		<img src="Logo.png"
		width="108" height="30" alt=logo>
	</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse"
	data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
	aria-expanded="false" aria-label="Toggle navigation"  >
	<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse justify-content-md-end " id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item active">
				<a href="{{route('MainPage')}}" class="nav-link">Home</a>
			</li>			
			<li class="nav-item">
				<a href="{{route('Booking')}}" class="nav-link">Booking</a>
			</li>
			<li class="nav-item">
				<a href="{{route('Login')}}" class="nav-link">Sing In</a>
			</li>
			<li class="nav-item">
				<a href="{{route('Contacts')}}" class="nav-link">Contact Us</a>
			</li>
			<li class="nav-item">
				<a href="{{route('Gallery')}}" class="nav-link">Services</a>
			</li>
			<li class="nav-item">
				<a href="{{route('About')}}" class="nav-link">About Us</a>
			</li>
		</ul>
	</div>
</nav>