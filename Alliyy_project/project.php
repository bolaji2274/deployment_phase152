<!DOCTYPE html>
<html lang="en">
<head>
  <title>Document</title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=], initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body class="body bg-ash">
<nav class="navbar navbar-dark bg-dark mt-3">
  <a class="navbar-brand" href="#">
    Welcome
  </a>
  
  <ul class="navbar-nav">
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          My Account
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="C:\xampp\htdocs\photo\profile.php">View/Edit profile</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="C:\xampp\htdocs\photo\order.php">My Order</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="C:\xampp\htdocs\photo\index.php">Logout</a>
        </div>
      </li>   
    </ul>
 
  <form class="form-inline" action="C:\xampp\htdocs\photo\Dashboard.php">
    <input class="form-control mr-sm" type="text" placeholder="Search for product,Brand">
   <button class="btn btn-success" type="submit" >Search</button>
   </form> 
<div>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-list" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbar-list">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Dashboard<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="C:\xampp\htdocs\photo\Dashboard.php">View Production Listing</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="C:\xampp\htdocs\photo\Dashboard.php">view product image</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="C:\xampp\htdocs\photo\Dashboard.php">view cart</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="C:\xampp\htdocs\photo\Dashboard.php">manage cart</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="C:\xampp\htdocs\photo\Dashboard.php">Buy Product</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="C:\xampp\htdocs\photo\checkout.html">Check out</a>
      </li>
    </ul>
  </div>
</div>
</nav>

<div id="carouselExampleIndicators" class="carousel-slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/alli image.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/alli image 2.jpg" alt="Second slide">
    </div>

    <div class="carousel-item">
      <img class="d-block w-100" src="images/alli image.jpg" alt="Third slide">
    </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
<section class="my-4">
<div class="container-fluid">
 <div class="row">
<div class="col-lg-4 col-md-4 col-12">
<a href="C:\xampp\htdocs\photo\Dashboard.php"><img src="images/Class Project UI & UX Design edited~4.jpg" class="img-fluid pb-3"></a>
</div>
<div class="col-lg-4 col-md-4 col-12">
<a href="C:\xampp\htdocs\photo\Dashboard.php"><img src="images/Class Project UI & UX Design edited~3.jpg" class="img-fluid pb-3"></a>
</div>
<div class="col-lg-4 col-md-4 col-12">
<a href="C:\xampp\htdocs\photo\Dashboard.php"><img src="images/Class Project UI & UX Design edited~2.jpg" class="img-fluid pb-3"></a>
</div>
</div>
</div>
</section>





    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/proper.js/1.16.0/umd/proper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
