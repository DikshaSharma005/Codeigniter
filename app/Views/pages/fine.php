<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
     <title>Pay your fine</title>
     <style>
        h1{
            color:whitesmoke;
            font-family: 'Times New Roman', Times, serif;
        }
        .navbar{
    padding-left: 0.5%;
 }
 .container{
    background-color:aquamarine;
    width: 33%;
    margin-top: 6%;
    border-radius: 2rem;   
}

form{
  height:500px;
  padding:20px 16px;
  font-size:small;
 }
 .btn{
    background-color:crimson;
    color:whitesmoke;
    border:1px solid white;
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
            <h1 style="color:darkslategray"><strong>Sorry! but you have to pay this fine to get a new pass.</strong></h1>
            <label for="pname"><b>Person name</b></label><br>
            <input type="text" placeholder="Enter name" name="pname" required><br><br>
      
            <label for="cardno"><b>Card Number</b></label><br>
            <input type="text" placeholder="1234 5768 345678" name="cardno" required><br><br>
                
            <label for="expiry"><b>Card Expiry</b></label><br>
            <input type="date" placeholder="MM/YYYY" name="expiry" required><br><br>
      
            <label for="CVV"><b>CVV/CVC</b></label><br>
            <input type="password" placeholder="***" name="CVV" required><br><br>
       
       
      <button type="submit" class="btn">Pay Rs. 500</button>    
          </div>
        </form>
        </body>
       </html>
