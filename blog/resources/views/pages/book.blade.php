@extends('layouts.main')
@section('content')
	<h1>Reserve Room Online</h1>
	<div class="col-md-12">
      <h4 class="mb-3"></h4>
      @include('pages.messages')
      <form action="{{route('reserve')}}" class="form-group" method="post">
        @csrf
        <div class="form-group">
          <label for="name">Enter Full Name</label>
          <input type="text" name="name" placeholder="Full Name" id="name" class="form-control">
        </div>
         <div class="form-group">
          <label for="email">Enter your E-mail</label>
          <input type="text" name="email" placeholder="you@example.com" id="email" class="form-control">
        </div>
         <div class="form-group">
          <label for="">Lorem ipsum dolor.</label>
          <input type="text" name="" placeholder="" id="" class="form-control">
        </div>
        <div class="form-group">
          <label for="RoomType">Room Type</label>
          <select name="RoomType" id="RoomType" class="form-control">
            <option value="standard">Standard Room</option>
            <option value="lux">Lux Room</option>
            <option value="apartment">Apartment</option>
          </select>
        </div>
        <div class="form-group col-md-4 row">
          <label for="arrival">Arrival Date</label>
          <input type="date" name="arrival" id="arrival" class="form-control">
        </div>
        <div class="form-group col-md-4 row">
          <label for="depart">Departure Date</label>
          <input type="date" name="depart" id="depart" class="form-control">
        </div>
        <button type="submit" class="btn btn-success">Reserve</button>
      </form>
    </div>
@endsection
