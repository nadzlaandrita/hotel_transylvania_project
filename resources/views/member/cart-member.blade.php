@inject('carbon', 'Carbon\Carbon')
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

@include('vincent-navbar.user-navbar')
  <header>
    <br>
    <br>
    <br>
    <br>

    <div class="view-price d-flex justify-content-end m-3">
        <h5 class="m-3">Total Price: Rp. {{$total_price}} </h5>

        <form action="/history" method="POST">
             @csrf
            <button type="submit" class="btn btn-primary">checkout</button>
        </form>

    </div>


        <div class="card mb-2" style="max-width: 700px; border: none">
            <div class="row g-0">

              @foreach ($cart_data as $item)
                <div class="col-md-4">
                  <img src="{{url($item->room->image)}}" class="img-fluid rounded-start"style="height: 256px" alt="...">
                </div>
                <div class="col-md-8">
                  <div class="card-body" style="background-color: #0B0B45">
                    <h5 class="card-title" style="text-align: center; color:#F1F2F4">{{$item->room->name}}</h5>
                    <h6>
                      Check In : {{$item->booked_from}}
                    </h6>
                    <h6>
                      Check Out : {{$item->booked_until}}
                    </h6>
                    <h6>
                      Price: Rp. {{$item->room->price}} /night(s)
                    </h6>
                    <?php
                      $booked_until = $carbon::parse($item->booked_until);
                      $booked_from = $carbon::parse($item->booked_from);
                      $interval = $booked_until->diffInDays($booked_from);
                    ?>
                    <h6>
                      Total Night(s) Spend : {{$interval}}
                    </h6>
                    <a href="/edit-cart/{{$item->room_id}}" class="btn btn-primary mb-2">Edit Cart</a>
                    <form action="/remove-cart/{{$item->room_id}}" method="POST">
                      @method('DELETE')
                      @csrf
                      <button type="submit" class="btn btn-danger btnchart d-flex">Remove from Cart</button>
                    </form>
                  </div>
                  <br>
                </div>
              @endforeach
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