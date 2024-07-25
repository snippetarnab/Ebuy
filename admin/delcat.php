<?php
include("inc/db.php");

$id=$_GET['did'];

$del="DELETE FROM category WHERE cid='$id'";
if($con->query($del)){
    header("location:listcat.php");
}


?>