<?php
include("inc/db.php");
session_start();
session_destroy();
header("location:index.php");

?>