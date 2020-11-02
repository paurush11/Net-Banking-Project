<?php
     include "validate_customer.php";
     include "connect.php";
     include "header.php";
     include "customer_navbar.php";
     include "customer_sidebar.php";
     include "session_timeout.php";
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="action_style.css">
</head>


<body>
    <div class="flex-container">
        <div class="flex-item">
            <?php
            $headline = mysqli_real_escape_string($conn, $_POST["grevience"]);
            $value =  mysqli_real_escape_string($conn, $_POST["greviencee"]);
            $news_details = mysqli_real_escape_string($conn, $_POST["grevience_details"]);
           
            $sql0 = "INSERT INTO grevience (title, created, sender_id)
            VALUES('$headline', NOW(),'$value')";
  

            $sql1 = "INSERT INTO grevience_body (body)
            VALUES('$news_details')"; ?>

            <?php
            if (($conn->query($sql0) === TRUE) && ($conn->query($sql1) === TRUE) ) { ?>
                <p id="info"><?php echo "Complaint posted successfully !\n"; ?></p>
            <?php
            } else { ?>
                <p id="info"><?php
                echo "Server Error !<br>";
                echo "Error: " . $sql0 . "<br>" . $conn->error . "<br>";
                echo "Error: " . $sql1 . "<br>" . $conn->error . "<br>"; ?></p>
            <?php
            }

            $conn->close();
            ?>
        </div>

        <div class="flex-item">
            <a href="/post_news.php" class="button">Post Again</a>
        </div>

    </div>

</body>
</html>
