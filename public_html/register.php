
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
      <div class="card mx-auto" style="width:28rem;">
         <div class="card-header">
            <span>Register</span>
          </div>
          <div class="card-body">
              <form>
                 <div class="form-group">
                    <label for="exampleInputEmail1">Full Name</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter fullname">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Re-enter Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  
                   <div class="form-group">
                    <label for="exampleInputPassword1">Usertype</label>
                    <select class="custom-select" id="inputGroupSelect01">
                    <option selected>Admin</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
                  </div>
                  

                  <button type="submit" class="btn btn-primary"><i class="fa fa-user">&nbsp;</i>Register</button>
                  <span><a href="">Login</a></span>
             </form>   
          </div>
      <div class="card-footer">
       
      </div>
    </div>
 
  </body>
</html>