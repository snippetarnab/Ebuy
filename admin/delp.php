<?php
include("inc/db.php");

$id=$_GET['did'];

$sel="SELECT * FROM product WHERE id='$id'";
$rs=$con->query($sel);
$row=$rs->fetch_assoc();
unlink("img/p_image/".$row['image']);

$del="DELETE FROM product WHERE id='$id'";
if($con->query($del)){
    header("location:listp.php");
}

?>
