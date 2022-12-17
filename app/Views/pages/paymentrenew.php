<!DOCTYPE html>
<html>
    <head>
        <title> Payment Details</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
        <style>
.container{
    background-color:lightcyan;
    width:29%;
    margin-top: 8%;
    border-radius: 3rem;
    border:1px solid black;
}
form{
  height:400px;
  padding:20px 16px;
  font-size: small;
 }
 h1{
    color:whitesmoke;
    font-size: 34px;
    font-family: 'Times New Roman', Times, serif;
}
.navbar{
    padding-left: 0.5%;
   
 }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-expand-sm bg-danger">
            <a>
            <img src="https://1.bp.blogspot.com/-Vv9PiIrBtG0/T5zAMXCEnlI/AAAAAAAAG4k/QBQ19n9aCxw/s320/PRTC.jpg" alt="Logo" style="width:40px;" class="rounded-pill">
              </a>
              <h1><strong>Pepsu Road Transport Corporation</strong></h1>
          </nav>
      
     <div class="container">
    <form action="http://localhost/ci/public/index.php/thanku">
        <h1 style="color:darkblue"><strong>Payment Details</strong></h1>
        <label for="pname"><b>Person name</b></label><br>
        <input type="text" placeholder="Enter name" name="pname" required><br><br>
  
        <label for="cardno"><b>Card Number</b></label><br>
        <input type="text" placeholder="1234 5768 345678" name="cardno" required><br><br>
            
        <label for="expiry"><b>Card Expiry</b></label><br>
        <input type="date" placeholder="MM/YYYY" name="expiry" required><br><br>
  
        <label for="CVV"><b>CVV/CVC</b></label><br>
        <input type="password" placeholder="***" name="CVV" required><br><br>
   
   
  <button type="submit" class="btn-danger ">Pay Rs. 100</button>    
      </div>
    </form>
    </body>
   </html>
