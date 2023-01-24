<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" rel="stylesheet">
    <title>Detail Category</title>
</head>
@include('wanda-navbar.admin-navbar')
<body>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap');
    *{
        padding: 0;
        margin: 0;
        transition: .2s linear;
        box-sizing: border-box;
        font-family: 'Raleway', sans-serif;
        text-decoration: none;
    }
    .wrapper7{
        margin: 10px auto;
        padding: 0 10%;
        padding-bottom: 10px;
        text-transform: capitalize;
    }
    h1{
        margin-top: 10%;
        color: #d4af37;
        font-size: 45px;
        text-align: center;
        padding-bottom: 15px;
    }
    .container22{
        display: grid;
        gap: 15px;
        grid-template-columns: repeat(auto-fit, minmax(270px, 1fr));
    }
    .box22{
        padding: 20px;
        text-align: center;
        border-radius: 20px;
        background-color: beige;
    }
    .box22 img{
        height: 150px;
    }
    .box22 h3{
        color: #0B0B45;
        padding: 10px 0;
        font-size: 20px;
    }
    .box22 p{
        color: #0B0B45;
        font-size: 14px;
        line-height: 1.6;
    }
    .btn22{
        color: #d4af37;
        border: none;
        outline: none;
        font-size: 17px;
        margin-top: 10px;
        padding: 8px 15px;
        background-color: #0B0B45;
        border-radius: 20px;
        display: inline-block;
    }
    .btn22:hover{
        letter-spacing: 1px;
    }
    </style>
    <div class="wrapper7">
        <h1>Regular Rooms</h1>
        <div class="container22">
            <div class="box22">
                <!-- yang diubah dibagian sini ya -->
                <img src="Screenshot (620).png" alt="">
                <h3>Nama Kamarnys</h3>
                <p>desc kamar. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis quod necessitatibus nihil, autem tenetur amet nobis explicabo, asperiores, sunt quasi sed eveniet. Deleniti, et corporis maiores ipsum inventore expedita neque.</p>
                <a href="" class="btn22">Book Now</a>
            </div>
        </div>
    </div>
</body>
</html>
