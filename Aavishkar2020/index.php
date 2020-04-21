<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, intial-scale=1">
        <title>Aavishkar 2020</title>
        
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="style.css">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        
      
    </head>
    <body>
        <header>
            <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
   <a class="navbar-brand" href="#">
    <img src="#" width="30" height="30" alt="">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <i class="fa fa-home"></i><span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About <i class="fas fa-address-book"></i></a>
      </li>
     <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-calendar-alt"></i>
          Event Days
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="day1.php">Day 1</a>
          <a class="dropdown-item" href="day2.php">Day 2</a>
          <a class="dropdown-item" href="day3.php">Day 3</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"> Last Year</a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="login.php"> Admin login</a>
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
    <div class="carousel-item active" style="height:80vh" data-interval="2000">
      <img src="imgs/1.JPG" class="d-block w-100" alt="..." >
    </div>
    <div class="carousel-item" style="height:80vh" data-interval="2000">
      <img src="imgs/2.JPG" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item" style="height:80vh" data-interval="2000">
      <img src="imgs/3.JPG" class="d-block w-100" alt="...">
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
     <div class='thetop'></div> 
     
<div class="accordion" id="accordionExample">
<!--    Event-->
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-2">
          <div class="media">
            <img src="imgs/aavishkar.png" class="mr-3 mt-3 rounded-circle" style="width:60px;" alt="...">
            <div class="media-body mt-4">
<!--            <h5 class="mt-2">Media heading</h5>-->
                <h4>Aavishkaar Event 1</h4>
            </div>
          </div><div class="text-center">
        <button class="btn btn-outline-info btn-sm collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne" style="margin:10px; padding:10px 120px;font-size:20px;">  More <i class="fa fa-info-circle fa-lg" aria-hidden="true"></i>
        
        </button><button id="firstevent" class="btn btn-outline-success btn-sm collapsed" type="button" data-toggle="collapse"  style="margin:10px; padding:10px 100px;font-size:20px;">
          Intrested <i class="fa fa-arrow-circle-right fa-lg"></i> 
        </button></div>
          
      </h2>
    </div>

    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf 
      </div>
        
    </div>
  </div>
<!--    Event-->
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h2 class="mb-2">
          <div class="media">
            <img src="imgs/aavishkar.png" class="mr-3 mt-3 rounded-circle" style="width:60px;" alt="...">
            <div class="media-body mt-4">
<!--            <h5 class="mt-2">Media heading</h5>-->
                <h4>Aavishkaar Event 2</h4>
            </div>
          </div>
          <div class="text-center">
        <button class="btn btn-outline-info btn-sm collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="margin:10px; padding:10px 120px;font-size:20px;">  More <i class="fa fa-info-circle fa-lg" aria-hidden="true"></i>
        
        </button><button class="btn btn-outline-success btn-sm collapsed" type="button" data-toggle="collapse"  style="margin:10px; padding:10px 100px;font-size:20px;">
          Intrested <i class="fa fa-arrow-circle-right fa-lg"></i> 
        </button></div>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf 
      </div>
    </div>
  </div>
<!--    Event-->
  <div class="card">
    <div class="card-header" id="headingThree">
      <h2 class="mb-2">
          <div class="media">
           <img src="imgs/aavishkar.png" class="mr-3 mt-3 rounded-circle" style="width:60px;" alt="...">
            <div class="media-body mt-4">
<!--            <h5 class="mt-2">Media heading</h5>-->
                <h4>Aavishkaar Event 3</h4>
            </div>
          </div>
      <div class="text-center">
        <button class="btn btn-outline-info btn-sm collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="margin:10px; padding:10px 120px;font-size:20px;">  More <i class="fa fa-info-circle fa-lg" aria-hidden="true"></i>
        
        </button><button class="btn btn-outline-success btn-sm collapsed" type="button" data-toggle="collapse"  style="margin:10px; padding:10px 100px;font-size:20px;">
          Intrested <i class="fa fa-arrow-circle-right fa-lg"></i> 
        </button></div>
      </h2>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf 
      </div>
    </div>
  </div> 
<!--    Event-->
    
    <div class="card">
    <div class="card-header" id="headingThree">
      <h2 class="mb-2">
          <div class="media">
           <img src="imgs/aavishkar.png" class="mr-3 mt-3 rounded-circle" style="width:60px;" alt="...">
            <div class="media-body mt-4">
<!--            <h5 class="mt-2">Media heading</h5>-->
                <h4>Aavishkaar Event 4</h4>
            </div>
          </div>
        <div class="text-center">
        <button class="btn btn-outline-info btn-sm collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour" style="margin:10px; padding:10px 120px;font-size:20px;">  More <i class="fa fa-info-circle fa-lg" aria-hidden="true"></i>
        
        </button><button class="btn btn-outline-success btn-sm collapsed" type="button" data-toggle="collapse"  style="margin:10px; padding:10px 100px;font-size:20px;">
          Intrested <i class="fa fa-arrow-circle-right fa-lg"></i> 
        </button></div>
      </h2>
    </div>
    <div id="collapseFour" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf 
      </div>
    </div>
  </div>
<!--    Event-->
    <div class="card">
    <div class="card-header" id="headingThree">
      <h2 class="mb-2">
          <div class="media">
           <img src="imgs/aavishkar.png" class="mr-3 mt-3 rounded-circle" style="width:60px;" alt="...">
            <div class="media-body mt-4">
<!--            <h5 class="mt-2">Media heading</h5>-->
                <h4>Aavishkaar Event 5</h4>
            </div>
          </div>
        <div class="text-center">
        <button class="btn btn-outline-info btn-sm collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive" style="margin:10px; padding:10px 120px;font-size:20px;">  More <i class="fa fa-info-circle fa-lg" aria-hidden="true"></i>
        
        </button><button class="btn btn-outline-success btn-sm collapsed" type="button" data-toggle="collapse"  style="margin:10px; padding:10px 100px;font-size:20px;">
          Intrested <i class="fa fa-arrow-circle-right fa-lg"></i> 
        </button></div>
      </h2>
    </div>
    <div id="collapseFive" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf 
      </div>
    </div>
  </div>
</div>       
            
        </header>
        <script src="js/bootstrap.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        
          <script type="text/javascript">
            document.getElementById("firstevent").onclick = function () {
                location.href = "firstevent.php";
                };
        </script>
    </body>
</html>