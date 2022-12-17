<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
        <title>New Application</title>
        <style>
          .image{
            background-image : url('https://images.hindustantimes.com/rf/image_size_630x354/HT/p2/2017/05/25/Pictures/_030e6502-414e-11e7-a718-97a052f84fc6.png');
      height: 50vh; 
      background-size: cover;
      filter: blur(4px);
          }
          h1{
            color: whitesmoke;
            font-size: 34px;
            font-family: 'Times New Roman', Times, serif;
           }
           .navbar{
    padding-left: 0.5%;
 }
        </style>
      </head>
      <body >
        <nav class="navbar navbar-expand-sm bg-danger">
          <a>
          <img src="https://1.bp.blogspot.com/-Vv9PiIrBtG0/T5zAMXCEnlI/AAAAAAAAG4k/QBQ19n9aCxw/s320/PRTC.jpg" alt="Logo" style="width:40px;" class="rounded-pill">
            </a>
            <h1><strong>PRTC Bus Pass Services</strong></h1>
        </nav>
      <div class="image"></div>
      <div class="container mt-5 mb-5">
        <h2>FOR NEW APPLICANTS</h2>
        <form action="http://localhost/ci/public/index.php/payment">
          <div class="mb-3 mt-3">
            <label for="Name">Name:</label>
            <input type="text" class="form-control" id="name" placeholder="Enter your Name" name="name">
          </div>
          <div class="mb-3 mt-3">
            <label for="name">College/University Name:</label>
            <input type="text" class="form-control" id="college" placeholder="Enter your College/University Name" name="college">
          </div>
          <div class="mb-3 mt-3">
            <label for="Permanent Address">Permanent Address:</label>
            <input type="text" class="form-control" id="address" placeholder="Enter your Address" name="address">
          </div>
          <div class="mb-3 mt-3">
            <label for="College/University Address">College/University Address:</label>
            <input type="text" class="form-control" id="address" placeholder="Enter your College/University Address" name="address">
          </div>
          <div class="mb-3 mt-3">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="abc@gmail.com" name="email">
          </div>
          <label class="form-label" for="File">Upload yourPassport-size Photograph:</label>
          <input type="file" class="form-control" id="File" /><br>
          <label class="form-label" for="File">Upload your college/University id proof:</label>
            <input type="file" class="form-control" id="File" />
          <div class="form-check mb-3 mt-3">
            <label class="form-check-label">
              <input class="form-check-input" type="checkbox" name="remember"> Remember me
            </label>
          </div>
         <h2 style="margin: top 1px; ;"> <button type="submit" class="badge bg-info">NEXT </button></h2>
         
        </form>
      
        <h6 style="color:black; background-color:lavender; margin-top: .5cm;">You will get your bus pass within 3 days. In case of delay you can drop your query at <a href="mailto:prtcbusservice@gmail.com">Prtc query handler</a></h6>
      </div>
     
      </body>
      </html>
    </form>
</html>
