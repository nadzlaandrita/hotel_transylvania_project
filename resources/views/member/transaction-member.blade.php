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
  
  @include('vincent-navbar.user-navbar')
    <br>
    <br>
    <br>
    <br>

    @foreach($transaction_data as $data)
      {{-- @dd($transaction_data) --}}
      <div class="isi-transaksi">
        <h3>Tanggal Transaksi : {{$data->created_at}}</h3>
        <ul>
          @foreach($data->transaction_detail as $item)
            <li> {{$item->room->name}} {{$item->spend}} night(s)   Rp. {{$item->sub_price}}</li>
          @endforeach
        </ul>
        <h3>Total Price: {{$data->total_price}}</h3>
      </div>
    @endforeach

    <style>
      .isi-transaksi{
        margin-left: 30px;
        margin-bottom: 30px;
        background-color:#0B0B45;
        width:1200px;
        height: 200px;
        padding: 20px;
      }
      h3,li{
        color:  #f1f2f4
      }
    </style>
