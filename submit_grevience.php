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
    <link rel="stylesheet" href="customer_add_style.css">
</head>

<body>
    <form class="grevience_form" action="submit_grevience_action.php" method="post">
        <div class="flex-container">
            <div class=container>
                <label>Complain Title:</label><br>
                <input name="grevience" size="50" type="text" required />
                <input name="greviencee" size="50" type="hidden"  value = 
                    <?php $id = $_SESSION['loggedIn_cust_id'];
                    $sql0 = "SELECT * FROM customer WHERE cust_id=".$id;
                    $result0 = $conn->query($sql0);
                    $cus_uname = "";
                    if ($result0->num_rows > 0) {
                        // output data of each row
                        while($row = $result0->fetch_assoc()) {
                            $cus_uname = $row["first_name"] ?? '' ;
                        }
                    }
                    echo $cus_uname; ?> />
            </div>
        </div>

        <div class="flex-container">
            <div class=container>
                <label>Details :</label><br>
                <textarea name="grevience_details" style="height: 200px; width: 60vw;" required /></textarea>
            </div>
        </div>

        <div class="flex-container">
            <div class="container">
                <button type="submit">Submit</button>
            </div>

            <div class="container">
                <button type="reset" class="reset" onclick="return confirmReset();">Reset</button>
            </div>
        </div>

    </form>

    <script>
    function confirmReset() {
        return confirm('Do you really want to reset?')
    }
    </script>

</body>
</html>
