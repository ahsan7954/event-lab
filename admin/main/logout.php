<?php
    include('./include/conn.php');

    session_destroy();
    header("Location: ../index.php");
?>