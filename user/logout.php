<?php
 session_start();
    include('./include/conn.php');

    session_destroy();
    header("Location: ./index.php");
?>