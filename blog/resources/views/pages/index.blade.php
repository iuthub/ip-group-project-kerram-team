@extends('layouts.main')
@section('content')
<div id="myCarousel" class="carousel slide" data-interval="3000" data-ride="carousel">

        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="img-fluid" src="pic2.png" alt="First Slide">
                <div class="carousel-caption d-none d-md-block">
                    <h2 class="car">First slide label</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="img-fluid" src="pic3.png" alt="Second Slide">
                <div class="carousel-caption d-none d-md-block">
                    <h2 class="car">Second slide label</h2>
                    <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="img-fluid" src="pic4.jpg" alt="Third Slide">
                <div class="carousel-caption d-none d-md-block">
                    <h2 class="car">First slide label</h2>
                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                </div>
            </div>
        </div>

        <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
<main class="mt-5">
  <section>
<div class="container-lg">
    <div class="row ">
      <div class="col-sm-2"></div>
      <div class="col-sm-4 text-center">

        <h1>Hotel.Uz</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
      </div>
      <div class="col-sm-4">
          <img class="img-fluid" src="pic4.jpg" alt="Third Slide">
      </div>
      <div class="col-sm-2"></div>
    </div>
  </div>
</section>
<section id="fac">
<div class="container">
<h2 class="text-center"> Hotel's Facilities</h2>
<div class="row d-flex justify-content-center mb-5">
<div class="col-md-8">
<p class='text-center'>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
</p>
</div>
</div>
<div class="row">
  <div class="col-md-4 mb-5 ">

<i class="fa fa-star fa-5x grey-text"
  id="icon"></i>
<h4 class="text-center">Disco Club</h4>
<p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut a</p>


</div>
<div class="col-md-4 mb-5 ">

<i class="fa fa-futbol-o fa-5x grey-text"
id="icon"></i>
<h4 class="text-center">Stadium</h4>
<p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut a</p>


</div>
<div class="col-md-4 mb-5 ">

<i class="fa fa-cutlery fa-5x grey-text"
id="icon"></i>
<h4 class="text-center">Reustarant</h4>
<p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut a</p>


</div>
</div>
</section>
</section id="map">
<h2 class="text-center">Our Location</h2>
<div class="row text-center">
  <div class="col-lg-4 col-md-12 mb-3">
    <p><i class="fa fa-map fa-1x mr-2 grey-text"></i>Tashkent</p>
</div>

<div class="col-lg-4 col-md-12 mb-3">
  <p><i class="fa fa-building fa-1x mr-2 grey-text"></i>Mon - Sun</p>
</div>
<div class="col-lg-4 col-md-12 mb-3">
  <p><i class="fa fa-phone fa-1x mr-2 grey-text"></i>+9989000000</p>
</div>
  </div>
<div class="container-fluid">
<div class=" col-lg-12 col-md-12">
  <div id="googleMap" class="z-depth-1" style="width:100%;height:600px;"></div>
</div>
</div>
</section>
  </main>

  <script>
  function myMap() {
  var mapProp= {
    center:new google.maps.LatLng(51.508742,-0.120850),
    zoom:5,
  };
  var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
  }
  </script>

  <script src="https://maps.googleapis.com/maps/api/js?AIzaSyCwnJ1QAViuU0jaF4tQNQwAmFpU12WvMHg&callback=myMap"></script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
@endsection
