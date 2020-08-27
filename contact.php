<!Doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
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
        <a class="nav-link" href="#">Contact us</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<div class="jumbotron">
  <h1 class="display-4">Hello We are Here for you</h1>
  <p class="lead">
    <a class="btn btn-primary btn-lg" href="https://mail.google.com/mail/u/0/#inbox" role="button">Email us</a>
  </p>
  <p class="lead">
    <a class="btn btn-primary btn-lg" href="https://www.instagram.com/_mr._yassh/?hl=en" role="button">instagram</a>
  </p>
</div>
<section class="my-5 bg-light">
    <div class="py-5">
         <h2 class="text-center"> Login For contact us </h2>
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
</body>
</html>