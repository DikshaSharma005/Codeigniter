<!DOCTYPE html>
<html lang="en">
<head>
    <title> Bus Pass Application</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://localhost/ci/public/mainpage.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
  
  </head>
  <body>
    <div class="container-fluid heading py-3 px-3 bg-danger">
      <div class="cont imtext d-flex jusify-content-center align-items-center">
        <div class="px-4">
          <img src="https://1.bp.blogspot.com/-Vv9PiIrBtG0/T5zAMXCEnlI/AAAAAAAAG4k/QBQ19n9aCxw/s320/PRTC.jpg" alt="logo" class="rounded-pill logoimg">
        </div>
        <div>
          <span class="logotext"><strong>PRTC Bus Services</strong></span>
        </div>
      </div>

      <ul class="nav navbar-collapse navig">
        <li class="nav-item"><a class="nav-link" href="http://localhost/ci/public/index.php/about">About</a></li> 
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Services</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item px-5 py-3" href="http://localhost/ci/public/index.php/apply">Apply</a></li>
            <li><a class="dropdown-item px-5 py-3" href="http://localhost/ci/public/index.php/renew">Renewal</a></li>
            <li><a class="dropdown-item px-5 py-3" href="http://localhost/ci/public/index.php/misplace">Misplace</a></li>
          </ul>
        </li>
        <li><a href="http://localhost/ci/public/index.php/review">Reviews </a></li>
    
        </ul>
    </div>
    <div class="container-fluid border">
        
      </div>
    </nav>
  <!-- Carousel -->
  <div id="demo" class="carousel slide" data-bs-ride="carousel">
 
     <!-- Indicators/dots -->
     <div class="carousel-indicators">
       <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
       <button type="button" data-bs-target="#demo" data-bs-slide-to="1"aria-label="Slide 2"></button>
       <button type="button" data-bs-target="#demo" data-bs-slide-to="2"aria-label="Slide 3"></button>
       <button type="button" data-bs-target="#demo" data-bs-slide-to="3"aria-label="Slide 4"></button>
       <button type="button" data-bs-target="#demo" data-bs-slide-to="4"aria-label="Slide 5"></button>
       <button type="button" data-bs-target="#demo" data-bs-slide-to="5"aria-label="Slide 6"></button>
     </div>
     
     <!-- The slideshow/carousel -->
     <div class="carousel-inner">
       <div class="carousel-item active">
         <img src="http://localhost/ci/public/carousal1.jpg" alt="carousal1" class="d-block" style="width:100%; ">
       </div>
       <div class="carousel-item">
         <img src="http://localhost/ci/public/carousal2.jpg" 
         alt="carousal2" class="d-block" style="width:100%; ">
       </div>
       <div class="carousel-item">
         <img src="http://localhost/ci/public/carousal3.jpg" alt="carousal3" class="d-block" style="width:100%; ">
       </div>
       <div class="carousel-item">
         <img src="http://localhost/ci/public/carousal4.jpg" 
         alt="carousal4" class="d-block" style="width:100%; ">
       </div>
       <div class="carousel-item">
         <img src="http://localhost/ci/public/carousal5.jpg" 
         alt="carousal5" class="d-block" style="width:100%; ">
       </div>
       <div class="carousel-item">
         <img src="http://localhost/ci/public/carousal6.jpg"
          alt="carousal6" class="d-block" style="width:100%; ">
       </div>
       
     </div>
   
     <!-- Left and right controls/icons -->
     <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
       <span class="carousel-control-prev-icon" aria-hidden="true"></span>
     </button>
     <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
       <span class="carousel-control-next-icon"aria-hidden="true"></span>
     </button>
     
   </div>

  </body> 
</html>
