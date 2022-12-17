<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link rel="stylesheet" href="http://localhost/ci/public/misplace.css">
     <title>Incase you misplaced your pass</title>
     <style>
       
     </style>

    </head>
<body>
   <nav class="navbar navbar-expand-sm bg-danger">
        <a>
        <img src="https://1.bp.blogspot.com/-Vv9PiIrBtG0/T5zAMXCEnlI/AAAAAAAAG4k/QBQ19n9aCxw/s320/PRTC.jpg" alt="Logo" style="width:40px;" class="rounded-pill">
          </a>
          <h1><strong>PRTC Bus Pass Services</strong></h1>
      </nav>
   
<div class="potrait">
            <!--<div class="container">
				<img class="img-circle" src="http://localhost/ci/public/misplaceoops.jpeg" alt="image"/>
				<h4><strong><br>Don't worry! We are here to help you.</strong></h4>
			</div>
		-->
	<form action="http://localhost/ci/public/index.php/fine">
			<div class="misplaceform">
          
				<div class="form-group">
				  <label for="fname">Name:</label>
				  <div class="col-sm-10">          
					<input type="text" class="form-control" id="name" placeholder="Enter your Name" name="name"><br>
				  </div>
				</div>
				<div class="form-group">
				  <label  for="collegename">College/University Name:</label>
				  <div class="col-sm-10">          
					<input type="text" class="form-control" id="collegename" placeholder="Enter College/University Name" name="collegename">
				  </div><br>
				</div>
				<div class="form-group">
				  <label for="email">Email:</label>
				  <div class="col-sm-10" >
					<input type="email" class="form-control" id="email" placeholder="abc@gmail.com" name="email"><br>
				  </div>
				</div>
                <div class="form-group">
                    <label for="email">Expected Expiry of lost Pass:</label>
                <div class="col-sm-10">
					<input type="Date" class="form-control" id="email" placeholder="MM/YYYY" name="Date"><br>
				  </div>
                </div>
				<div class="col-sm-10">
                <label for="File">Upload your Passport-size Photograph:</label>
                <input type="file" class="form-control" id="File" /><br></div>
                  <div class="col-sm-10"><label  for="File">Upload your college/University id proof:</label>
                <input type="file" class="form-control" id="File" /></div>
               
			<div class="form-group">
					<button type="submit" class="btn">Pay Fine</button>
            </div>
			</div>
      
            </form>


            </div>

</body>
</html>
