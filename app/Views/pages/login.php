<!DOCTYPE html>
<html>
    <head>
    <title>Login form</title>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="http://localhost/ci/public/loginstyle.css">
    </head>
    <body>
      <div class="container">
        <form action="action_page.php" method="post">       
              <div class="imgcontainer">
                <br>
                <img src="https://th.bing.com/th/id/OIP.7s4UlbTyTtFSQVgO7485ywHaHx?w=189&h=198&c=7&r=0&o=5&dpr=1.25&pid=1.7" 
                alt="Avatar" class="rounded-pill">
              </div><br>
              <br>
          
              <label for="uname"><b>Username</b></label><br>
              <input type="text" placeholder="Enter Username" name="uname" required><br>
        
              <label for="psw"><b>Password</b></label><br>
              <input type="password" placeholder="Enter Password" name="psw" required><br>
         
              <button type="submit" class="loginbtn"><a href="http://localhost/ci/public/index.php/mainpage">Login</button><br><br>
              <label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
              </label><br><br>
              <button type="button"  class="cancelbtn"><a href="http://localhost/ci/public/index.php/mainpage">Cancel</a></button>
            
              <span class="psw">Forgot <a href="#">password?</a></span>
          
           
          
        </form>
      </div>
    </body>
</html>
