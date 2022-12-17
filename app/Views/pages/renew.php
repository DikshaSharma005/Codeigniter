<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="http://localhost/ci/public/renew.css">
        <title>Renew your pass</title>
        <style>
          
          
        </style>
      </head>
      <body >
        <nav class="navbar navbar-expand-sm bg-danger">
            <a>
            <img src="https://1.bp.blogspot.com/-Vv9PiIrBtG0/T5zAMXCEnlI/AAAAAAAAG4k/QBQ19n9aCxw/s320/PRTC.jpg" alt="Logo" style="width:40px;" class="rounded-pill">
              </a>
              <h1 style="font-size: 34px;"><b>PRTC Bus Pass Services</b></h1>
          </nav>
    <img align="right" src="http://localhost/ci/public/cardrenew.jpg"  class="img-circle">
    <img align= "left" src="http://localhost/ci/public/renew1.jpg" class="img-rounded">
    <!--img  align="left" src="http://localhost/ci/public/renew1.jpg" class="image">-->
    <div class="container">
        <form action="http://localhost/ci/public/index.php/paymentrenew">
          <div class="mb-3 mt-3">
            <br><label for="Name">Name:</label><br>
            <input type="text" class="form-control" id="name" placeholder="Enter your Name" name="name">
          </div>
          <div class="mb-3 mt-3">
            <label for="name">Pass Number:</label><br>
            <input type="text" class="form-control" id="card" placeholder="1234 5678" name="card">
          </div>
          <div class="mb-3 mt-3">
            <label for="Permanent Address">Expiry Date:</label><br>
            <input type=date class="form-control" id="Date" placeholder="DD/MM/YYYY" name="Date">
          </div>
          <label class="form-label" for="File">Upload your Card Image:</label><br>
            <input type="file" class="form-control" id="File" /><br>
         
         <h2> <button type="submit"><b>NEXT </b></button></h2><br>
         
        </form>
      </div>
      
    
     
      </body>
      </html>
    </form>
</html>
