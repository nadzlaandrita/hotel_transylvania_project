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
        .wrapper .input_field input, textarea{
            width: 100%;
            outline: none;
            border: 1px solid #d4af37;
            font-size: 15px;
            padding: 8px 10px;
            border-radius: 3px;
            transition: all 0.3s ease;
            border-radius: 20px;
        }
        .wrapper .input_field textarea{
            resize: none;
            height: 125px;
        }
        .wrapper .title{
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 25px;
            text-transform: uppercase;
            color: #d4af37;
            text-align: center;
        }
        .wrapper form .input_field{
            margin-bottom: 15px;
            display: flex;
            align-items: center;
        }
        .wrapper form .input_field label{
            width: 200px;
            color: #d4af37;
            margin-right: 10px;
            font-size: 14px;
        }
        .wrapper form .input_field .btn{
            width: 100%;
            padding: 8px 10px;
            font-size: 15px;
            border: 0;
            background-color: #d4af37;
        }
        .wrapper form .input_field .btn{
            color: white;
        }
    </style>
    <div class="wrapper">
        <div class="title" >
            Registration Form
        </div>
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="input_field">
                    <label for="">Email</label>
                    <input type="email" name="" id="">
                </div>
                <div class="input_field">
                    <label for="">Username</label>
                    <input type="username" name="" id="">
                </div>
                <div class="input_field">
                    <label for="">Password</label>
                    <input type="password" name="" id="">
                </div>
                <div class="input_field">
                    <label for="">Phone Number</label>
                    <input type="text" name="" id="">
                </div>
                <div class="input_field">
                    <label for="">Address</label>
                    <textarea name="" id="" cols="30" rows="10"></textarea>
                </div>
                <div class="input_field">
                    <input type="submit" value="Register" class="btn" style="color: white;">
                </div>
            </form>
    </div>
</body>
</html>
