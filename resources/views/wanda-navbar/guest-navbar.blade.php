<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" rel="stylesheet">
<style>
    @import url('https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap');
    *{
        font-family: 'Raleway', sans-serif;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    header{
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        background-color: #0B0B45;
        padding: 5px 30px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    .logo img{
        width: 50px;
        height: 50px;
    }
    .wrapper{
        display: flex;
        align-items: center;
    }
    header ul{
        position: relative;
        display: flex;
        gap: 50px;
    }
    header ul li{
        list-style: none;
    }
    header ul li a{
        position: relative;
        text-decoration: none;
        font-size: 16px;
        color: white;
    }
    header ul li a:hover{
        color: #d4af37;
    }
    header ul li .signout a{
        border-radius: 20px;
        border: 2px solid #d4af37;
    }
</style>
<header>
    <a href="/" class="logo"><img src="{{asset('images/logo.png')}}" alt=""></a>
    <div class="wrapper">
        <ul class="navi">
            <li><a href="/register">Register</a></li>
            <li><a href="/login">Sign In</a></li>
        </ul>
    </div>
</header>
