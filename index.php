<!Doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>website</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Web Learn</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="services.php">Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact us</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/codes3.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/php.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/computer.jpg" alt="Third slide">
    </div>
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
<section class="my-5">
       <div class="py-5">
          <h2 class="text-center"> About us </h2>
       </div>
    <div class="container-fluid">
         <div class="row">
             <div class="col-lg-6 col-md-6 col-12">
                 <img src="images/computer.jpg" alt="newyork" class="img-fluid about-img">
             </div>
             <div class="col-lg-6 col-md-6 col-12">
                <h2 class="display-4"> I am a Web Developer </h2>
                <p class="py-3"> We are Here for you.To learn HTML, CSS, JavaScript, React.js, php just visit our services. you can also contact us for any Help. </p>
                <a href="https://www.instagram.com/_mr._yassh/?hl=en" class="btn btn-success">Check More</a>
             </div>
         </div>
    </div>
</section>
<section class="my-5">
    <div class="py-5">
        <h2 class="text-center"> Our Services </h2>
    </div>
    <div class="container-fluid">
        <div class="row">
        <div class="col-lg-4 col-md-4 col-12">
        <div class="card">
            <img class="card-img-top" src="images/HTML.jpg" alt="Card image cap">
            <div class="card-body">
            <h5 class="card-title">HTML</h5>
            <p class="card-text">Web Developing</p>
            <a href="https://www.w3schools.com/" class="btn btn-primary">Go and Learn</a>
            </div>
        </div>
        </div>
        <div class="col-lg-4 col-md-4 col-12">
        <div class="card">
            <img class="card-img-top" src="images/JavaScript.jpg" alt="Card image cap">
            <div class="card-body">
            <h5 class="card-title">JavaScript</h5>
            <p class="card-text">Web Developing</p>
            <a href="https://www.w3schools.com/" class="btn btn-primary">Go and Learn</a>
            </div>
        </div>
        </div>
        <div class="col-lg-4 col-md-4 col-12">
        <div class="card">
            <img class="card-img-top" src="images/php.jpg" alt="Card image cap">
            <div class="card-body">
            <h5 class="card-title">Php</h5>
            <p class="card-text">web Developing</p>
            <a href="https://www.w3schools.com/" class="btn btn-primary">Go and Learn</a>
            </div>
        </div>
        </div>
        </div>
    </div>
</section>
<section class="my-5">
    <div class="py-5">
       <h2 class="text-center"> Web Developing Code Gallery </h2>
    </div>
    <div class="container-fluid">
         <div class="row">
           <div class="col-lg-4 col-md-4 col-12">
               <img src="images/codes1.jpg" alt="newyork-image" class="img-fluid pb-4">
           </div>
           <div class="col-lg-4 col-md-4 col-12">
               <img src="images/HTML.jpg" alt="newyork-image" class="img-fluid pb-4">
           </div>
           <div class="col-lg-4 col-md-4 col-12">
               <img src="images/codes1.jpg" alt="newyork-image" class="img-fluid pb-4">
           </div>
           <div class="col-lg-4 col-md-4 col-12">
               <img src="images/codes2.jpg" alt="newyork-image" class="img-fluid pb-4">
           </div>
           <div class="col-lg-4 col-md-4 col-12">
               <img src="images/JavaScript.jpg" alt="newyork-image" class="img-fluid pb-4">
           </div>
           <div class="col-lg-4 col-md-4 col-12">
               <img src="images/codes2.jpg" alt="newyork-image" class="img-fluid pb-4">
           </div>
           <div class="col-lg-4 col-md-4 col-12">
               <img src="images/computer.jpg" alt="newyork-image" class="img-fluid pb-4">
           </div>
           <div class="col-lg-4 col-md-4 col-12">
               <img src="images/php.jpg" alt="newyork-image" class="img-fluid pb-4">
           </div>
           <div class="col-lg-4 col-md-4 col-12">
               <img src="images/computer.jpg" alt="newyork-image" class="img-fluid pb-4">
           </div>
         </div>
    </div>
</section>
<section class="my-5 bg-light">
    <div class="py-5">
         <h2 class="text-center"> Login Form </h2>
    </div>
    <div class="w-50 m-auto">
        <form action="userinfo.php" method="POST">
              <div class="form-group">
                   <label> Username </label>
                   <input type="text" name="username" autocomplete="off" class="form-control">
              </div>
              <div class="form-group">
                   <label> Email id </label>
                   <input type="email" name="email" autocomplete="off" class="form-control">
              </div>
              <div class="form-group">
                   <label> Mobile no. </label>
                   <input type="number" name="number" autocomplete="off " class="form-control">
              </div>
              <div class="form-group">
                   <label> Comment </label>
                   <textarea class="form-control" name="comment"></textarea>
              </div>
              <input type="submit" class="btn btn-success">
        </form>
    </div>
</section>
<footer>
    <p class="p-3 text-white text-center bg-dark"> Web Developer &copy; 2020 </p>
</footer>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>