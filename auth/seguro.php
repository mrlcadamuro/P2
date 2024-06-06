<?php
    session_start();
    if (!isset($_SESSION["online"])) {
        header("location: login.php");
    }
    $_SESSION["online"];
?>