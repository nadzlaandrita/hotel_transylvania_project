<nav class="navbar navbar-expand-lg fixed-top t" style="background-color: #0B0B45">
    <div class="container">
      <a class="navbar" href="/home" style="color: #F1F2F4"><a><img class="logo" src="{{asset('images/logo.png')}}" alt=""></a></a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon" style="background-color: #F1F2F4"></span>
      </button>
      <div class="collapse navbar-collapse"  id="navbarResponsive">
        <ul class="navbar-nav">
            <a class="nav-link1" href="/home">Home</a>
        </ul>
        <ul class="navbar-nav">
            <a class="nav-link2" href="/cart">Cart</a>
        </ul>
        <ul class="navbar-nav">
            <a class="nav-link3" href="/profile">Profile</a>
        </ul>
        <ul class="navbar-nav">
            <a class="nav-link4" href="/logout">Sign Out</a>
        </ul>
      </div>
    </div>
  </nav>

  <style>
    .nav-link1{
    color: #F1F2F4;
    margin-left: 835px
    }
    .nav-link1,.nav-link2,.nav-link3,.nav-link4,:active{
        color: white
    }
    .nav-link1,.nav-link2,.nav-link2,.nav-link3,.nav-link4{
    color: #F1F2F4;
    margin-right: 50px;
    text-decoration: none
    }
    .logo{
        width: 50px;
        height: 50px;
    }
    .nav-link1:hover{
    color:#d4af37;
    }
    .nav-link2:hover{
    color:#d4af37;
    }
    .nav-link3:hover{
    color: #d4af37;
    }
    .nav-link4:hover{
    color: #d4af37;
    }
  </style>
