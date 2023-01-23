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
<body>


      <header>

        <br>
        <br>

    <div class="view-price d-flex justify-content-end m-3">
        <h5 class="m-2">Total Price: 2.400.000 </h5>

        <form action="#" method="POST">
             @csrf
            <button type="submit" class="btn btn-primary">checkout</button>
        </form>

    </div>


      <div class="card mb-3" style="max-width: 700px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="{{asset("images/luxury_1.jpg")}}" class="img-fluid rounded-start"style="height: 213px" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body" style="background-color: #0B0B45">
              <h5 class="card-title" style="text-align: center; color:#F1F2F4">Luxury Room</h5>

              <h6>
                Check In : 19 januari 2023
              </h6>
              <h6>
                Check Out : 20 januari 2023
              </h6>
              <h6>
                Qty : 2
              </h6>
              <h6>
                Price: 2.400.000
              </h6>
              <a href="#" class="btn btn-primary">Edit Cart</a>
              <a href="#" class="btn btn-danger">Remove from Cart</a>
            </div>
          </div>
        </div>
      </div>

      <div class="card mb-3" style="max-width: 700px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="{{asset("images/luxury_2.jpg")}}" class="img-fluid rounded-start"style="height: 213px" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body" style="background-color: #0B0B45">
              <h5 class="card-title" style="text-align: center; color:#F1F2F4">Luxury Room</h5>

              <h6>
                Check In : 19 januari 2023
              </h6>
              <h6>
                Check Out : 20 januari 2023
              </h6>
              <h6>
                Qty : 2
              </h6>
              <h6>
                Price: 2.400.000
              </h6>
              <a href="#" class="btn btn-primary">Edit Cart</a>
              <a href="#" class="btn btn-danger">Remove from Cart</a>
            </div>
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

    .card{
        margin-left: 400px
    }
    h6{
        color: white
    }
</style>
</body>
</html>
