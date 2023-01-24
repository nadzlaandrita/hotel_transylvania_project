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
        .wrapper11{
            max-width: 500px;
            width: 100%;
            background: #ffffff;
            margin: 10% auto;
            padding: 30px;
            border-radius: 20px;
            border: 2px solid #d4af37;
        }
        .wrapper11 .title{
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 25px;
            text-transform: uppercase;
            color: #d4af37;
            text-align: center;
        }
        .wrapper11 .profile label{
            width: 200px;
            color: #d4af37;
            margin-right: 10px;
            font-size: 20px;
        }
        .wrapper11 .profile1 label{
            width: 200px;
            color: #d4af37;
            margin-right: 10px;
            font-size: 20px;
        }
        .wrapper11 .profile{
            margin-bottom: 30px;
            text-align: center;
        }
        .wrapper11 .profile1{
            display: inline-block;
            margin-left: 40px;
            text-align: center;
            margin-bottom: 30px;
        }
        .wrapper11 .profile img{
            height: 200px;
            border-radius: 20px;
        }
        .wrapper11 .profile input{
            width: 100%;
            outline: none;
            border: 1px solid #d4af37;
            font-size: 15px;
            padding: 8px 10px;
            border-radius: 3px;
            transition: all 0.3s ease;
            border-radius: 20px;
        }
    </style>
    <div class="wrapper11">
        <div class="title" >
            Room Detail
        </div>
        <div class="profile">
            <img src="Screenshot (620).png" alt="">
        </div>
        <div class="profile">
            <label for="">Room's Name :</label>
            <p>blabla</p>
            <!-- kasih tau ya nama roomnya -->
        </div>
        <div class="profile">
            <label for="">Room's Description :</label>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque aliquam est, sint expedita quos temporibus. Autem ipsa, fugit corporis fugiat quisquam dolorum assumenda perspiciatis similique, accusantium iure magni est. Consequuntur.</p>
            <!-- kasih tau description -->
        </div>
            <div class="profile1">
                <label for="">Room's Category :</label>
                <p>blabla</p>
                <!-- kasih tau category -->
            </div>
            <div class="profile1">
                <label for="">Room's Price :</label>
                <p>blabla</p>
                <!-- kasih tau harga -->
            </div>
        <div class="profile">
            <label for="">Check In Date :</label>
            <input type="date" class="" id="" name="">
            <!-- kasih tau check in date -->
        </div>
        <div class="profile">
            <label for="">Check Out Date :</label>
            <input type="date" class="" id="" name="">
            <!-- kasih tau check out -->
        </div>
        <div class="profile">
            <input type="submit" value="Book" style="color: white; background-color: #d4af37;">
        </div>
    </div>
</body>
</html>
