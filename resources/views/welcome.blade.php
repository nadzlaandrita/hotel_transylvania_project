<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" rel="stylesheet">
    <title>
        @yield('Welcome')
    </title>
</head>
{{-- @include('wanda-navbar.guest-navbar') --}}
<body>

    <nav class="navbar navbar-expand-lg fixed-top t" style="background-color: #0B0B45">
        <div></div>
        <div class="container">
          <a class="navbar-brand pe-5" href="#" style="color: #F1F2F4">Hotel Transylvania</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon" style="background-color: #F1F2F4"></span>
          </button>
          <div class="collapse navbar-collapse"  id="navbarResponsive">
            <ul class="navbar-nav">
                <a class="nav-link" href="/login">Sign In</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <header>

        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active" style="background-image: url('https://source.unsplash.com/LAaSoL0LrYs/1920x1080')">
              <div class="carousel-caption">
                <h5>Hotel Transylvania</h5>
                <p>Share Your Journey and Experince</p>
                <button type="button" class="btn btn-primary" style="background-color: #0B0B45">
                 <a href="/register" style="color: #F1F2F4; text-decoration: none">SIGN UP NOW</a>
              </div>
            </div>
            <div class="carousel-item" style="background-image: url('https://source.unsplash.com/bF2vsubyHcQ/1920x1080')">
              <div class="carousel-caption">
                <h5>Hotel Transylvania</h5>
                <p>Share Your Journey and Experince</p>
                <button type="button" class="btn btn-primary " style="background-color: #0B0B45">
                <a href="/register" style="color: #F1F2F4; text-decoration: none">SIGN UP NOW</a>
              </div>
            </div>
            <div class="carousel-item" style="background-image: url('https://source.unsplash.com/szFUQoyvrxM/1920x1080')">
              <div class="carousel-caption">
                <h5>Hotel Transylvania</h5>
                <p>Share Your Journey and Experince</p>
                <button type="button" class="btn btn-primary" style="background-color: #0B0B45">
                <a href="/register" style="color: #F1F2F4; text-decoration: none">SIGN UP NOW</a>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </header>
      <br>
      <br>

      <div class="d-flex justify-content-center">
        <!-- Page Content -->
      <div class="card mx-5" style="width: 18rem;">
        <img class="card-img-top" src="{{asset("images/luxury_1.jpg")}}" alt="Card image cap" style="height: 150px">
        <div class="card-body" style="background-color: #0B0B45">
          <h3 class="card-title" style="text-align: center; color: #F1F2F4">Luxury Room</h3>
          <p class="card-text" style="text-align: justify; color: #F1F2F4">A Luxury Hotel is considered a hotel that provides a luxurious accommodation experience to the guest.There are no set standards such as stars for luxury hotels. Often 4 or 5-star hotels describe themselves as luxury</p>
        </div>
      </div>

      <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="{{asset("images/penthouse_1.jpg")}}" alt="Card image cap"style="height: 150px">
        <div class="card-body" style="background-color: #0B0B45">
          <h3 class="card-title"  style="text-align: center; color:#F1F2F4">Penthouse Room</h3>
          <p class="card-text"  style="text-align: justify; color:#F1F2F4">A 69 sqm size, Penthouse Room provided with king bed, 2 flat screen TVs, sofa in our stylish and modern penthouse room. A 69 sqm size, traveler or small family with high mobile Perfectly suited for individual business traveler</p>
        </div>
      </div>

      <div class="card mx-5" style="width: 18rem;">
        <img class="card-img-top" src="{{asset("images/regular_6.jpg")}}" alt="Card image cap" style="height: 150px">
        <div class="card-body" style="background-color: #0B0B45">
          <h3 class="card-title"  style="text-align: center; color:#F1F2F4">Regular Room</h3>
          <p class="card-text"  style="text-align: justify; color:#F1F2F4">The rooms of the hotel are classified according to the number of beds in them, their size and their range of facilities. Prices of rooms in every hotel are different depends upon their convenience.</p>
        </div>
      </div>

      </div>
      <br>
      <br>



<style>
    body{
        font-family: 'Raleway', sans-serif
    }
    .carousel-item {
    height: 60vh;
    min-height: 350px;
    background: no-repeat center center scroll;
    -webkit-background-size: cover;
    -moz-background-size: cover;
     -o-background-size: cover;
    background-size: cover;
    }

    .nav-link{
    color: #F1F2F4;
    margin-left: 900px
    }
    
    .nav-link:active{
        color: white
    }
</style>
</body>
</html>
