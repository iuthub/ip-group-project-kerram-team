<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="main.css">
    <title>Our Hotel</title>
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
<a href="#" class="navbar-brand">
<img src="Logo.png"
width="108" height="30" alt=logo>
</a>
<button class="navbar-toggler" type="button" data-toggle="collapse"
data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
aria-expanded="false" aria-label="Toggle navigation"  >
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse justify-content-md-end" id="navbarSupportedContent">
  <ul class="navbar-nav mr-auto">
    <li class="nav-item active">
      <a href="#" class="nav-link">Home </a>
    </li>
    <li class="nav-item">
      <a href="#" class="nav-link">Services</a>
    </li>
    <li class="nav-item">
      <a href="#" class="nav-link">Sing In</a>
    </li>
    <li class="nav-item">
      <a href="#" class="nav-link">Make Order</a>
    </li>
    <li class="nav-item">
      <a href="/contact" class="nav-link">Contact US</a>
    </li>
</ul>
</div>
    </nav>


    <div id="myCarousel" class="carousel slide" data-interval="3000" data-ride="carousel">

        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="img-fluid" src="pic1.png" alt="First Slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="img-fluid" src="pic2.png" alt="Second Slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="img-fluid" src="pic3.png" alt="Third Slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
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
    <div class="row">
      <div class="col-sm-2"></div>
      <div class="col-sm-4">
        <h2> About US </h2>
        <h1>Hotel.Uz</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim</p>

      </div>
      <div class="col-sm-4">
          <img class="img-fluid" src="pic4.jpg" alt="Third Slide">
      </div>
      <div class="col-sm-2"></div>
    </div>

    <! –– Google mamp https://www.w3schools.com/graphics/google_maps_intro.asp ––>

    <div id="googleMap" style="width:100%;height:400px;"></div>

<script>
function myMap() {
var mapProp= {
  center:new google.maps.LatLng([41.338681957452685,69.33485593332827],-0.120850),
  zoom:9,
};
var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
</script>
<! –– Googlehttps://www.w3schools.com/howto/howto_css_fixed_footer.asp mamp https://www.w3schools.com/graphics/google_maps_intro.asp ––>
<style>
.footer {
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  background-color: red;
  color: white;
  text-align: center;
}
</style>

<div class="footer">
  <p>Footer</p>
</div>
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap"></script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
