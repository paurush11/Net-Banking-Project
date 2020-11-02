<?php
    if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 300)) {
        header("location:logout_action.php?sessionExpired=true");
        exit();
        //300 sec yani 5 min
    }
    $_SESSION['LAST_ACTIVITY'] = time(); // update last activity time stamp
?>
