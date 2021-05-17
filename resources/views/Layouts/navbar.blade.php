<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
<!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->
<html>
<head>


<link  rel='stylesheet' href="bootstrap.min.css"/>
<style>
body {
    background: #E0E0E0
}
.nav_bar{
  width:100%;
}

</style>
@yield('internal_edit_css')
</head>
<body>
<div class='nav_bar' >
<!-- public\amazon.png -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
  <a class="navbar-brand" href="#"><img src='{{asset("amazon.png")}}' width='120px' height='50px' b></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item ">
        <a class="nav-link  text-white" href="{{url('add_data')}}">Add Product</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link text-white" href="{{url('display_data')}}">Products</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link text-white" href="{{url('cart')}}">Cart</a>
      </li>
      <!-- <ul class='justify-content-end'> -->
      <!-- <li class="nav-item " >
        <a class="nav-link text-white" href="{{url('login.php">Sign In</a>

      </li> -->

      <!-- <li class="nav-item text-right mr-0">

        <a class="nav-link text-white" href="sign_up.php">Sign up</a>
      </li> -->
     <!-- </ul> -->
    </ul>
    
  </div>
</nav>
<div>

@yield('content')
</body>