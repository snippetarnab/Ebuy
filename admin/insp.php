<?php
include("inc/db.php");

if(isset($_POST['add'])){
    $n=$con->real_escape_string($_POST['pname']);
    $p=$_POST['parent'];
    $pr=$con->real_escape_string($_POST['price']);

    $buf=$_FILES['pimg']['tmp_name'];
    $f=time().$_FILES['pimg']['name'];
    move_uploaded_file($buf,"img/p_image/".$f);

    $ins="INSERT INTO product SET parent='$p',p_name='$n',price='$pr',image='$f'";
    if($con->query($ins)){
        header("location:listp.php");
    }
}

?>