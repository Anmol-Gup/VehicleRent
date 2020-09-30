<?php
session_start();
session_unset();
sessiom_destroy();
header("location:admin1.php");
?>