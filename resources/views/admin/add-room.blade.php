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
        .wrapper5{
            max-width: 500px;
            width: 100%;
            background: #ffffff;
            margin: 10% auto;
            padding: 30px;
            border-radius: 20px;
            border: 2px solid #d4af37;
        }
        .wrapper5 .input_field input, textarea{
            width: 100%;
            outline: none;
            border: 1px solid #d4af37;
            font-size: 15px;
            padding: 8px 10px;
            border-radius: 3px;
            transition: all 0.3s ease;
            border-radius: 20px;
        }
        .wrapper5 .input_field textarea{
            resize: none;
            height: 125px;
        }
        .wrapper5 .title{
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 25px;
            text-transform: uppercase;
            color: #d4af37;
            text-align: center;
        }
        .wrapper5 form .input_field{
            margin-bottom: 15px;
            display: flex;
            align-items: center;
        }
        .wrapper5 form .input_field label{
            width: 200px;
            color: #d4af37;
            margin-right: 10px;
            font-size: 14px;
        }
        .wrapper5 form .input_field .btn{
            width: 100%;
            padding: 8px 10px;
            font-size: 15px;
            border: 0;
            background-color: #d4af37;
        }
        .wrapper5 form .input_field .btn{
            color: white;
        }
        .wrapper5 form .input_field .input{
            color: #d4af37;
        }
        .wrapper5 form .input_field .custom_select{
        height: 37px;
        width: 100%;
        position: relative;
        border-radius: 20px;
        border: 1px solid #d4af37;
        }
        .wrapper5 form .input_field .custom_select select{
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
    <div class="wrapper5">
        <div class="title" >
            Add Room
        </div>

            @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block">
                    <strong>{{$message}}</strong>
                </div>

                <img src="{{ asset('images/'.Session::get('image')) }}" />
            @endif

            <form action="{{url('/add-room')}}" method="POST" enctype="multipart/form-data">
                @csrf 

                <div class="input_field">
                    <label for="">Room Name</label>
                    <input type="text" name="name" id="">
                    @error('name')
                        <div class="alert alert-dismissible alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="input_field">
                    <label for="">Price</label>
                    <input type="text" name="price" id="">
                    @error('price')
                        <div class="alert alert-dismissible alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="input_field">
                    <label for="">Category</label>
                    <select class="custom_select" name="category" id="">
                        <option selected>Select an Option</option>
                        @foreach($category_data as $data)
                            <option value="{{$data->category_name}}">{{$data->category_name}}</option>
                        @endforeach
                    </select>
                    @error('category')
                        <div class="alert alert-dismissible alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="input_field">
                    <label for="">Description</label>
                    <textarea name="desc" id="" cols="30" rows="10"></textarea>
                    @error('desc')
                        <div class="alert alert-dismissible alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="input_field">
                    <label for="">
                        Image Url
                    </label>
                    <input type="file" class="input" id="" name="image">
                </div>

                <div class="input_field">
                    <input type="submit" value="Add" class="btn" style="color: white;">
                </div>
            </form>
    </div>
</body>
</html>
