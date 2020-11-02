

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesheetabout.css">
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Grandstander:ital,wght@1,600&display=swap" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">

    
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
    
    <div class="flex-container">

        
            <div class="flex-item-0">
                <h1 id="form_header">Developers of this project</h1>
                <br>
            </div>
        
    </div>
    <div class = "container">
        <div class = "row">
            <div class = "column">
                <div class="card">
                    <img src="images/jaatu.jpeg">
                    <div class="descriptions">
                        <h1>Jatin Dhankhar</h1>
                        <p>The developer responsible for all the sql file queries generation and database management,in addition to some frontend developemnt</p>
                       
                    </div>
                </div> 
                
                
            </div>
            <div class = "column">
                <div class="card">
                    <img src="images/me.jpg">
                    <div class="descriptions">
                        <h1>Paurush Batish</h1>
                        <p>The developer responsible for all the responsive layout of the webpages and frontend development,in addition to some php creation</p>
                      
                    </div>
                </div> 
                    
            </div>
            <div class = "column">
                <div class="card">
                    <img src="images/another.jpeg">
                    <div class="descriptions">
                        <h1>Prem Kumar</h1>
                        <p>The developer responsible for php in the webpages and backend and connecting the webpages with sql</p>
                        
                    </div>
                </div>     
            </div>
        </div>
    </div>
    






       



</body>
</html>

<?php include "easter_egg.php"; ?>
