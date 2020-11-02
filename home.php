

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesheethome.css">
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Grandstander:ital,wght@1,600&display=swap" rel="stylesheet">
  
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">

    <script type="text/javascript">

    function login_flip()
    {
      $("#loginform").css({"-webkit-transition":"-webkit-transform 0.9s","transition":" transform 0.9s"});
      $("#loginform").css({"-moz-transform":"scaleX(1)","-o-transform":"scaleX(1)","-webkit-transform":"scaleX(1)","transform":"scaleX(1)"});
      $("#container").css("-webkit-transform","scaleX(1)");
      document.getElementById("wrapper").innerHTML='  <article class="card-body"><h4 class="card-title text-center mb-3 mt-1">Welcome Admin</h4><hr><p class="text-success text-center">Login here</p><form action="admin_login_action.php" method="post"><div class="form-group"><div class="input-group"><div class="input-group-prepend"><span class="input-group-text"> <i class="fa fa-user"></i> </span></div><input type="text" name="admin_uname" class="form-control" placeholder="Administrator Email or login" required ></div> <!-- input-group.// --></div> <!-- form-group// --><div class="form-group"><div class="input-group"><div class="input-group-prepend"><span class="input-group-text"> <i class="fa fa-lock"></i> </span></div><input class="form-control" placeholder="******" type="password" name="admin_psw" required ></div></div><div class="form-group"><button type="submit" class="btn btn-primary btn-block"> Login  </button><button type="button" class="btn btn-primary btn-block" onclick="admin_flip();"> Users </button></div> <!-- form-group// --><p class="text-center"><a href="#" class="btn">Forgot password?</a></p></form></article>';
    }

    function admin_flip()
    {
      $("#loginform").css({"-webkit-transition":"-webkit-transform 0.9s","transition":" transform 0.9s"});
      $("#loginform").css({"-moz-transform":"scaleX(-1)","-o-transform":"scaleX(-1)","-webkit-transform":"scaleX(-1)","transform":"scaleX(-1)"});
      $("#container").css("-webkit-transform","scaleX(-1)");
      document.getElementById("wrapper").innerHTML='  <article class="card-body"><h4 class="card-title text-center mb-3 mt-1">Welcome Users</h4><hr><p class="text-success text-center">Login here</p><form action="customer_login_action.php" method="post"><div class="form-group"><div class="input-group"><div class="input-group-prepend"><span class="input-group-text"> <i class="fa fa-user"></i> </span></div><input type="text" name="cust_uname" class="form-control" placeholder="Customer Email or login" required ></div> <!-- input-group.// --></div> <!-- form-group// --><div class="form-group"><div class="input-group"><div class="input-group-prepend"><span class="input-group-text"> <i class="fa fa-lock"></i> </span></div><input class="form-control" placeholder="******" type="password" name="cust_psw" required ></div></div><div class="form-group"><button type="submit" class="btn btn-primary btn-block"> Login  </button><button type="button" class="btn btn-primary btn-block" onclick="login_flip();"> Admin </button></div> <!-- form-group// --><p class="text-center"><a href="#" class="btn">Forgot password?</a></p></form></article>';
    }
	
  </script>
</head>
<?php
    include "header.php";
    include "navbar.php";

    if (isset($_GET['loginFailed'])) {
        $message = "Invalid Credentials ! Please try again.";
        echo "<script type='text/javascript'>alert('$message');</script>";
    }
?>

<body>
<br>
    
    <div class="container">

        
            <div class="flex-item-0">
                <h1 id="form_header">Banking at Your Fingertips.</h1>
            </div>
        <br><br>
       
<!-- News jumbotron -->

        

        <div class="d-flex justify-content-center ">
           <div class = "center">

            <div class="card" id="wrapper" >
            <article class="card-body">
                <h4 class="card-title text-center mb-3 mt-1">Welcome Users</h4>
                <hr>
                <p class="text-success text-center">Login here</p>
                    <form action="customer_login_action.php" method="post">
                        <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                            </div>
                            <input type="text" name="cust_uname" class="form-control" placeholder="Customer Email or login" required >
                        </div> <!-- input-group.// -->
                        </div> <!-- form-group// -->
                        <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                            </div>
                            <input class="form-control" placeholder="******" type="password" name="cust_psw" required >
                        </div> <!-- input-group.// -->
                        </div> <!-- form-group// -->
                        <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block"> Login  </button>
                        <button type="button" class="btn btn-primary btn-block" onclick="login_flip();"> Admin </button>
                        </div> <!-- form-group// -->
                        <p class="text-center"><a href="#" class="btn">Forgot password?</a></p>
                    </form>
            </article>
            </div> <!-- card.// -->
            </div>
        </div> <!-- col.// -->
        
        
        
    </div>

<!--     
    <div id="wrapper" class = "container">
                    <form action="customer_login_action.php" method="post">
                        <div class="flex-item-login">
                            <h2>Welcome</h2>
                        </div>

                        <div class="flex-item">
                            <input type="text" name="cust_uname" placeholder="Enter your Username" required>
                        </div>

                        <div class="flex-item">
                            <input type="password" name="cust_psw" placeholder="Enter your Password" required>
                        </div>

                        <div>
                            <button type="submit">Login</button>
                            <input type="button" value="Click For SignUp!" onclick="admin_flip();">
                        </div>
                    </form>  
   </div> -->
   


</body>
</html>

<?php include "easter_egg.php"; ?>
