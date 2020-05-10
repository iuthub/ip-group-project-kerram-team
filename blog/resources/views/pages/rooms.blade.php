@extends('layouts.main')
@section('content')
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   
   
    <!-- Stylesheet -->
    <link rel="stylesheet" href="/css/rooms.css">
</head>
<body>
    
    
   

<div class="breadcrumb-area bg-img bg-overlay jarallax" >
<div class="container h-100">
<div class="row h-100 align-items-center">
    <div class="col-12">
        <div class="breadcrumb-content text-center">
            <h2 class="page-title">Our Rooms</h2>
            
        </div>
    </div>
</div>
</div>
</div>
<!-- Breadcrumb Area End -->
<!-- Rooms Area Start -->
<div class="rooms-area section-padding-100-0">
<div class="container">
<div class="row">
    <div class="col-12 col-lg-8">
        <!-- Single Room Area -->
        <div class="single-room-area d-flex align-items-center mb-50 wow fadeInUp" data-wow-delay="100ms">
            <!-- Room Thumbnail -->
            <div class="room-thumbnail">
                <img src="RoomStandard.jpg" alt="">
            </div>
           
            <div class="room-content">
                <h2 class = "roomNames">Standard Room</h2>
                <h4>200$ <span>/ Day</span></h4>
                <div class="room-feature">
                    <h6>Size: <span>9 m</span></h6>
                    <h6>Capacity: <span>Max person 5</span></h6>
                    <h6>Bed: <span>Marriot Bed by Jamison</span></h6>
                    <h6>Services: <span>Wifi, television ...</span></h6>
                </div>
                <a href="{{route('Booking')}}" class="btn view-detail-btn" id= "roomStandard">Book Now <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
            </div>
        </div>
        
        <!-- Single Room Area -->
        <div class="single-room-area d-flex align-items-center mb-50 wow fadeInUp" data-wow-delay="500ms">
            <!-- Room Thumbnail -->
            <div class="room-thumbnail">
                <img src="RoomLux.jpeg" alt="">
            </div>
            <!-- Room Content -->
            <div class="room-content">
                <h2 class = "roomNames">Room Lux</h2>
                <h4>400$ <span>/ Day</span></h4>
                <div class="room-feature">
                    <h6>Size: <span>15 m</span></h6>
                    <h6>Capacity: <span>Max persion 8</span></h6>
                    <h6>Bed: <span>Hilton Garden Inn Bed</span></h6>
                    <h6>Services: <span>Wifi, television, balcon ...</span></h6>
                </div>
                <a href="{{route('Booking')}}" class="btn view-detail-btn" id="roomLux">Book Now <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
            </div>
        </div>
        <!-- Single Room Area -->
        <div class="single-room-area d-flex align-items-center mb-50 wow fadeInUp" data-wow-delay="700ms">
            <!-- Room Thumbnail -->
            <div class="room-thumbnail">
                <img src="Apartment.jpeg" alt="">
            </div>
            <!-- Room Content -->
            <div class="room-content">
                <h2 class = "roomNames">Deluxe Apartment</h2>
                <h4>1000$ <span>/ Day</span></h4>
                <div class="room-feature">
                    <h6>Size: <span>30 meters</span></h6>
                    <h6>Capacity: <span>Max persion 5</span></h6>
                    <h6>Bed: <span>Sheraton’s Sleep Experience Mattress</span></h6>
                    <h6>Services: <span>Wifi, television, additional rooms ...</span></h6>
                </div>
                <a href="{{route('Booking')}}" class="btn view-detail-btn" id= "roomApartment">Book Now <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
            </div>
        </div>
      
       
    </div>

</div>
</div>
</div>
<!-- Rooms Area End -->






<!-- Bootstrap -->
<script src="js/bootstrap.min.js"></script>
<!-- All Plugins -->

<!-- Active -->
<script src="js/default-assets/active.js"></script>
</body>
@endsection