<?php

if(!isset($_SESSION)) {
    session_start();
}
    include "validate_admin.php";
    include "header.php";
    include "user_navbar.php";
    include "admin_sidebar.php";
    include "session_timeout.php";
    include "connect.php";
    $user = 'root';
    $password = '';
    $db = 'net_banking';
    $host = 'localhost';
    
    $myConnection= mysqli_connect("$host","$user","$password","$db") or die ("could not connect to mysql");

    $sql0 = "SELECT * FROM grevience ";
    $sql1 = "SELECT * FROM grevience_body";
    $sql2 = "SELECT grevience.*, grevience_body.* FROM grevience JOIN grevience_body on grevience.id=grevience_body.id";
    $result0 = mysqli_query($myConnection,$sql0);
    $result1 = mysqli_query($myConnection,$sql1);
    $result2 = mysqli_query($myConnection,$sql2);

    
?>

<!DOCTYPE html>
<html>

<head>
        <style type="text/css">
            tr.header
            {
                font-weight:bold;
                font-size: 28px;
            }
            tr.alt
            {
                
            }
            @media only screen and (max-width: 760px),(min-device-width: 768px) and (max-device-width: 1024px) {
                /* Force table to not be like tables anymore */
	table, thead, tbody, th, td, tr { 
		display: block; 
	}
	
	/* Hide table headers (but not display: none;, for accessibility) */
	thead tr { 
		position: absolute;
		top: -9999px;
		left: -9999px;
	}
	
	tr { border: 1px solid #ccc; }
	
	td { 
		/* Behave  like a "row" */
		border: none;
		border-bottom: 1px solid #eee; 
		position: relative;
		padding-left: 50%; 
	}
	
	td:before { 
		/* Now like a table header */
		position: absolute;
		/* Top/left values mimic padding */
		top: 6px;
		left: 6px;
		width: 45%; 
		padding-right: 10px; 
		white-space: nowrap;
	}

	

                    
            }
            
            table {
            font-family: 'Arial';
            margin: 25px auto;
            border-collapse: collapse;
            border: 1px solid #eee;
            border-bottom: 2px solid #00cccc;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1), 0px 10px 20px rgba(0, 0, 0, 0.05), 0px 20px 20px rgba(0, 0, 0, 0.05), 0px 30px 20px rgba(0, 0, 0, 0.05);
            }
            table tr:hover {
            background: #f4f4f4;
            }
            table tr:hover td {
            color: #555;
            }
            table th, table td {
            color: black;
            border: 1px solid #eee;
            padding: 12px 35px;
            border-collapse: collapse;
            }
            table th {
            background: #00cccc;
            color: #fff;
            text-transform: uppercase;
            font-size: 12px;
            }
            table th.last {
            border-right: none;
            }
        </style>
        <script type="text/javascript">
            $(document).ready(function(){
               $('.striped tr:even').addClass('alt');
            });
            $('table tr').each(function(){
            $(this).find('th').first().addClass('first');
            $(this).find('th').last().addClass('last');
            $(this).find('td').first().addClass('first');
            $(this).find('td').last().addClass('last');
            });

            $('table tr').first().addClass('row-first');
            $('table tr').last().addClass('row-last');

        </script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin_home_style.css">
    <link href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@800&display=swap" rel="stylesheet">
</head>
<body>  
    <div class="flex-container">
        <div class="flex-item">
            <h1 id="customer">
                Welcome Admin !
            </h1>
            <p id="customer" style="max-width:800px">
                Here are a few greviences.
            </p>

            <table class="striped">
            <tr class="header">
                <td>SNo</td>
                <td>Username</td>
                <td>Subject</td>
                <td>Time</td>
                <td>Body</td>
                
            </tr>
            <?php
            // while($row2 = mysqli_fetch_array($result1)){
            //     while ($row = mysqli_fetch_array($result0)) {
            //         echo "<tr>";
            //         echo "<td>".$row['id']."</td>";
            //         echo "<td>".$row['sender_id']."</td>";
            //         echo "<td>".$row['title']."</td>";
            //         echo "<td>".$row['created']."</td>";
            //         echo "<td>".$row2['body']."</td>";
            //         echo "</tr>";
            //     }
            // }
            while ($row = mysqli_fetch_array($result2)) {
                        echo "<tr>";
                        echo "<td>".$row['id']."</td>";
                        echo "<td>".$row['sender_id']."</td>";
                        echo "<td>".$row['title']."</td>";
                        echo "<td>".$row['created']."</td>";
                        echo "<td>".$row['body']."</td>";
                        echo "</tr>";
                    }

            
             

            ?>
            
        </div>
    </div>
    
</body>
</html>