
<!Doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Crud Oop Project</title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
   <style>
   img{
    max-width:60%;
    height:auto;
   }
   </style>
  </head>
  <body>
	   
     <!-- navbar -->
	  <?php include_once('./templates/header.php'); ?>
     <br>
     <div class="card mx-auto" style="width: 18rem;">
      <img class="card-img-top mx-auto" src="./images/login.jpg" alt="userLogin" style="width:80%">
      <div class="card-body">
          <form>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary"><i class="fa fa-lock">&nbsp;</i>Login</button>
                <span><a href="register.php">Register</a></span>
          </form>    
      </div>

      <div class="card-footer">
        <span><a href="">Forgot password?</a></span>
      </div>
    </div>
 
  </body>
</html>