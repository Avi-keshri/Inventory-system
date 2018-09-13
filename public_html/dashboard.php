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
    <script src="./js/main.js"></script>
</head>
<body>

   <?php include_once('./templates/header.php') ;?>
  <br><br>
      <div class="container">
        <div class="row">
            <div class="col-md-4">
              <div class="card mx-auto" style="width: 18rem;">
                <img class="card-img-top mx-auto" style="width:60%;margin-top:10px;"src="./images/user1.jpg" alt="userImage">
                <div class="card-body">
                  <h5 class="card-title">Profile Info</h5>
                  <p class="card-text"><i class="fa fa-user">&nbsp;</i>Avinash kumar</p>
                  <p class="card-text"><i class="fa fa-user">&nbsp;</i>Admin</p>
                  <p class="card-text"><i class="fa fa-user">&nbsp;</i>Last Login : xxxx-xx-xx</p>
                  <a href="#" class="btn btn-primary"><i class="fa fa-edit">&nbsp;</i>Edit Profile</a>
                </div>
              </div>
            </div>

                <div class="col-md-8">
                  <div class="jumbotron" style="width:100%;height:100%;">
                     <h1> Welcome Admin,</h1>
                    <div class="row">
                      <div class="col-md-6">
                        <iframe src="http://free.timeanddate.com/clock/i6enie73/n1648/szw160/szh160/cf100/hnce1ead6" frameborder="0" width="160" height="160"></iframe>
                      </div>
                      <div class="col-sm-6">
                        <div class="card">
                          <div class="card-body">
                            <h5 class="card-title">New Orders</h5>
                            <p class="card-text">Here you can Invoice and creates new orders.</p>
                            <a href="#" class="btn btn-primary">New Orders</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
        </div>
      </div>
<br>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="card">
              <div class="card-body">
                 <h5 class="card-title">Categories</h5>
                  <p class="card-text">Here you can manages categories and you can add parent and sub categories.</p>
                  <a id="add_cat" href="#" data-toggle="modal" data-target="#form_category" class="btn btn-primary">Add</a>
                  <a href="#" class="btn btn-primary">Manage</a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <div class="card-body">
                 <h5 class="card-title">Brands</h5>
                  <p class="card-text">Here you can manages brand and you and new brands.</p>
                  <a id="add_brand" href="#"data-toggle="modal" data-target="#form_brand" class="btn btn-primary">Add</a>
                  <a href="#" class="btn btn-primary">Manage</a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <div class="card-body">
                 <h5 class="card-title">Products</h5>
                  <p class="card-text">Here you can manages product and you add new products.</p>
                  <a id="add_prod" href="#" data-toggle="modal" data-target="#form_product" class="btn btn-primary">Add</a>
                  <a href="#" class="btn btn-primary">Manage</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <?php
      //category form 
      include_once('./templates/category_modal.php');?>

       <?php
      //category form 
      include_once('./templates/brand_modal.php');?>

       <?php
      //category form 
      include_once('./templates/product_modal.php');?>
 
</body>
</html>