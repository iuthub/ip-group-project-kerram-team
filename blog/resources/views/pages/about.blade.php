@extends('layouts.main')
@section('content')
<link rel="stylesheet" href="/css/about_us.css"/>

<body>
  <div class="about-section">
    <h1>About Us</h1>
    <p>"Kerram" Team</p>
    <p>We are the students of IUT (4th semester) currently developing the website for "Kerram" Hotel.</p>
  </div>


  <div class="row">
    <div class="column">
      <div class="card">
        <img src="Anis.jpg" alt="Anis" style="width:100%">
        <div class="container">
          <h2>Anis Kurbonov</h2>
          <p class="title">Developer</p>
          <p>Created and modified the main server-side concepts</p>
          <p>a.kurbonov@student.inha.uz</p>
          <p><button class="button">Contact</button></p>
        </div>
      </div>
    </div>

    <div class="column">
      <div class="card">
        <img src="Doston.jpg" alt="Dostonbek" style="width:100%">
        <div class="container">
          <h2>Dostonbek Rustamov </h2>
          <p class="title">Developer</p>
          <p>Created Front Side of "Contact Us" and "About Us" Pages</p>
          <p>d.rustamov@student.inha.uz</p>
          <p><button class="button">Contact</button></p>
        </div>
      </div>
    </div>

    <div class="column">
      <div class="card">
        <img src="Javokhir.jpg" alt="Javokhir" style="width:100%">
        <div class="container">
          <h2>Javokhir Ziyautdinov</h2>
          <p class="title">Developer</p>
          <p>Created the Front Side of "Index" Page.</p>
          <p>j.ziyautdinov@student.inha.uz</p>
          <p><button class="button">Contact</button></p>
        </div>
      </div>
    </div>

</div>
<div class="row justify-content-center">
    <div class="column">
      <div class="card">
        <img src="Jamshedkhon.jpg" alt="Jamshedkhon" style="width:100%">
        <div class="container">
          <h2>Jamshedkhon Akobirov</h2>
          <p class="title">Developer</p>
          <p>Developed main server-side concepts</p>
          <p>j.akobirov@student.inha.uz</p>
          <p><button class="button">Contact</button></p>
        </div>
      </div>
    </div>

    <div class="column">
      <div class="card">
        <img src="Temur.jpg" alt="Temur" style="width:100%">
        <div class="container">
          <h2>Temur Shavkatov</h2>
          <p class="title">Developer</p>
          <p>Developing routes and interaction between pages</p>
          <p>t.shavkatov@student.inha.uz</p>
          <p><button class="button">Contact</button></p>
        </div>
      </div>
    </div>
  </div>
</body>
@endsection
