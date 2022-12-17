<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="http://localhost/ci/public/loginstyle.css">
    <title>Enter your login Details</title>
  </head>
  <body>
    <div class="container">
      <div class="imgcontainer">
                <br>
                <img src="https://th.bing.com/th/id/OIP.7s4UlbTyTtFSQVgO7485ywHaHx?w=189&h=198&c=7&r=0&o=5&dpr=1.25&pid=1.7" 
                alt="Avatar" class="rounded-pill">
              </div><br>
        <div class="row justify-content-md-center">
            <div class="col-5">
                
                
                
                <?php if(session()->getFlashdata('msg')):?>
                    <div class="alert alert-warning">
                       <?= session()->getFlashdata('msg') ?>
                    </div>
                <?php endif;?>
                <form action="<?php echo base_url(); ?>/index.php/signin/" method="post">
               
                    <div class="form-group mb-3">
                     <label for="uname"><b>Username</b></label><br><br>
                        <input type="email" name="email" placeholder="               Username" value="<?= set_value('email') ?>" class="form-control" >
                        <br>
                    </div>
                    <div class="form-group mb-3">
                    <label for="psw"><b>Password</b></label><br>
                        <input type="password" name="password" placeholder="Password" class="form-control" >
                    <br></div>
                    
                         <button type="submit" class="loginbtn"><a href="http://localhost/ci/public/index.php/mainpage">Signin</button><br><br>
              <label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
              </label><br><br>
              <button type="button"  class="cancelbtn"><a href="http://localhost/ci/public/index.php/mainpage">Cancel</a></button>
            
              <span class="psw">Forgot <a href="#">password?</a></span>
                     
                </form>
            </div>
              
        </div>
    </div>
  </body>
</html>
