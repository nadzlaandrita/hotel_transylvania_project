<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" rel="stylesheet">
    @section('title', 'profile-admin')
</head>
@include('wanda-navbar.admin-navbar')
<body>
    
    <style>
         @import url('https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap');
        *{
            font-family: 'Raleway', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .wrapper4{
            max-width: 500px;
            width: 100%;
            background: #ffffff;
            margin: 10% auto;
            padding: 30px;
            border-radius: 20px;
            border: 2px solid #d4af37;
        }
        .wrapper4 .title{
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 25px;
            text-transform: uppercase;
            color: #d4af37;
            text-align: center;
        }
        .wrapper4 .profile label{
            width: 200px;
            color: #d4af37;
            margin-right: 10px;
            font-size: 14px;
        }
        .wrapper4 .profile{
            margin-bottom: 30px;
            text-align: center;
        }
        </style>

        
        <div class="wrapper4">
            <div class="title" >
                My Profile
            </div>
            @foreach($user_data as $data)
                <div class="profile">
                    <label for="">My Role :</label>
                    <p>{{$data->role}}</p>
                    <!-- kasih tau ya member atau admin -->
                </div>
                <div class="profile">
                    <label for="">Username :</label>
                    <p>{{$data->username}}</p>
                    <!-- kasih tau username -->
                </div>
                <div class="profile">
                    <label for="">Email :</label>
                    <p>{{$data->email}}</p>
                    <!-- kasih tau email -->
                </div>
                <div class="profile">
                    <label for="">Phone Number :</label>
                    <p>{{$data->phone_number}}</p>
                    <!-- kasih tau phone number -->
                </div>
                <div class="profile">
                    <label for="">Address :</label>
                    <p>{{$data->address}}</p>
                    <!-- kasih tau address -->
                </div>
            @endforeach
        </div>

        
</body>
</html>
