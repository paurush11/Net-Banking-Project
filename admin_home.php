<?php
    include "validate_admin.php";
    include "header.php";
    include "user_navbar.php";
    include "admin_sidebar.php";
    include "session_timeout.php";
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin_home_style.css">
    <link href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@800&display=swap" rel="stylesheet">
</head>
<style>
    ul li{
    max-width: 600px;
    margin-left: 100px;
    font-size: 30px;
    font-family: 'Inconsolata', monospace;
    color: #212121;
    line-height: 42px;
    padding: 10px 10px;
}
@media screen and (max-width: 855px) {
    ul li {
        margin:0px;
    }
}
</style>
<body>
    <div class="flex-container">
        <div class="flex-item">
            <h1 id="customer">
                Welcome Admin !
            </h1>
            <p id="customer" style="max-width:800px">
                From here you can manage all of core Internet Banking settings.<br>
                You can add/manage customers, view their transactions, edit their
                details and even delete them. <br>You can also post news on the website.
                <br>You can view problem details in grevience section and later contact them<br>
                Admin rights are only for - 
                
            </p>
            <ul>
                <li>Paurush</li>
                <li>Jatin</li>
                <li>Prem</li>
            </ul>
        </div>
    </div>

</body>
</html>

<?php include "easter_egg.php"; ?>
