<?php
include("inc/db.php");

if(isset($_POST['add'])){
    $p=$_POST['parent'];
    $c=$con->real_escape_string($_POST['cname']);

    $ins="INSERT INTO category SET c_name='$c',pid='$p'";
    if($con->query($ins)){
        header("location:listcat.php");
    }
}
?>