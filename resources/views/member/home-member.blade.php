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
        @yield('home-member')
    </title>
</head>
@include('vincent-navbar.user-navbar')
<body>

  <header>

    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>

      <div class="carousel-inner">
        <div class="carousel-item active" style="background-image: url('{{asset('images/slider4.jpg')}}');">
          <div class="carousel-caption">
            <h5>Hotel Transylvania</h5>
            <p>Share Your Journey and Experince</p>
          </div>
      </div>

      <div class="carousel-item" style="background-image: url('{{asset('images/slider5.jpg')}}');">
        <div class="carousel-caption">
          <h5>Hotel Transylvania</h5>
          <p>Share Your Journey and Experince</p>
        </div>
      </div>

      <div class="carousel-item" style="background-image: url('{{asset('images/slider6.jpg')}}');">
        <div class="carousel-caption">
          <h5>Hotel Transylvania</h5>
          <p>Share Your Journey and Experince</p>
        </div>
      </div>

      <div class="carousel-item" style="background-image: url('{{asset('images/slider7.jpg')}}');">
        <div class="carousel-caption">
          <h5>Hotel Transylvania</h5>
          <p>Share Your Journey and Experince</p>
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

  @foreach($category_data as $data)

    <div class="card mb-3" style="max-width: 700px; max-height: 500px">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="{{$data->room[0]->image}}" class="rounded-start" style="height: 141.6px; width: 233px" alt="...">
        </div>

        <div class="col-md-8">
          <div class="card-body " style="background-color: #0B0B45"">
            <h5 class="card-title" style="text-align: center; color:#F1F2F4">{{$data->category_name}} Rooms</h5>
            <p class="card-text"  style="text-align: justify; color:#F1F2F4">{{$data->room[0]->desc}}</p>
            <a href="/category/{{$data->id}}" type="button" class="btn btn-primary">More Detail</a>
          </div>
        </div>

      </div>
    </div>

  @endforeach



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

    .card{
        margin-left: 400px
    }
</style>
</body>
</html>
