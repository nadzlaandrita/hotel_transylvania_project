<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
@include('wanda-navbar.user-navbar')
<body>
    <style>
         @import url('https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap');
        *{
            font-family: 'Raleway', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .wrapper{
            max-width: 500px;
            width: 100%;
            background: #ffffff;
            margin: 10% auto;
            padding: 30px;
            border-radius: 20px;
            border: 2px solid #d4af37;
        }
        .wrapper .title{
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 25px;
            text-transform: uppercase;
            color: #d4af37;
            text-align: center;
        }
        .wrapper .profile label{
            width: 200px;
            color: #d4af37;
            margin-right: 10px;
            font-size: 14px;
        }
        .wrapper .profile{
            margin-bottom: 30px;
            text-align: center;
        }
        </style>
        
        <div class="wrapper">
            <div class="title" >
                My Profile
            </div>
            <div class="profile">
                <label for="">My Role :</label>
                <p>blabla</p>
                <!-- kasih tau ya member atau admin -->
            </div>
            <div class="profile">
                <label for="">Username :</label>
                <p>blabla</p>
                <!-- kasih tau username -->
            </div>
            <div class="profile">
                <label for="">Email :</label>
                <p>blabla</p>
                <!-- kasih tau email -->
            </div>
            <div class="profile">
                <label for="">Phone Number :</label>
                <p>blabla</p>
                <!-- kasih tau phone number -->
            </div>
            <div class="profile">
                <label for="">Address :</label>
                <p>blabla</p>
                <!-- kasih tau address -->
            </div>
        </div>
</body>
</html>
