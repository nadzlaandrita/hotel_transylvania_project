<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" rel="stylesheet">
    <title>Document</title>
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
        .wrapper form .input_field .input{
            color: #d4af37;
        }
        .wrapper form .input_field .custom_select{
        height: 37px;
        width: 100%;
        position: relative;
        border-radius: 20px;
        border: 1px solid #d4af37;
        }
        .wrapper form .input_field .custom_select select{
        -webkit-appearance: none;
        appearance: none;
        width: 100%;
        height: 100%;
        padding: 8px 10px;
        outline: none;
        }
        .inputbox select{
        width: 12.26cm;
        outline: none;
        font-size: 15px;
        }
    </style>
    <div class="wrapper">
        <div class="title" >
            Add Rooms
        </div>
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="input_field">
                    <label for="">Room Name</label>
                    <input type="email" name="" id="">
                </div>
                <div class="input_field">
                    <label for="">Price</label>
                    <input type="text" name="" id="">
                </div>
                <div class="input_field">
                    <label for="">Category</label>
                    <select class="custom_select" name="" id="">
                        <option selected>Select an Option</option>
                        <option value=""></option>
                        <!-- yang atas di line 111 itu yang di foreach buat category id sama name nya ya -->
                    </select>
                </div>
                <div class="input_field">
                    <label for="">Description</label>
                    <textarea name="" id="" cols="30" rows="10"></textarea>
                </div>
                <div class="input_field">
                    <label for="">
                        Image Url
                    </label>
                    <input type="file" class="input" id="" name="">
                </div>
                <div class="input_field">
                    <input type="submit" value="Add" class="btn" style="color: white;">
                </div>
            </form>
    </div>
</body>
</html>
