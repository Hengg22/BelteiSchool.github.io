<?php

session_start();
if (isset($_SESSION['user_id']) == "") {
    header("Location: index.php");
}

?>
<?php echo ($_SESSION['user_role'] == 1) ? header("location: admin.php") : header("location: logout.php")?>
