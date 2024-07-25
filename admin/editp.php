<?php
include("inc/db.php");

$id=$_GET['eid'];
$sel="SELECT * FROM product WHERE id='$id'";
$rs=$con->query($sel);
$row=$rs->fetch_assoc();
?>
<link rel="stylesheet" href="css/style.css">
<form action="insp.php" method="post" enctype="multipart/form-data">
    <p><input type="hidden" name="id" value="<?php echo $row['id']; ?>"/></p>
                        <p>Parent</p>
                        <p>
                            <select name="parent">
                                <option value="">--select--</option>
                                <?php
                                $sel="SELECT * FROM category WHERE pid!='0'";
                                $rs=$con->query($sel);
                                while($row=$rs->fetch_assoc()){
                                ?>
                                <option  value="<?php echo $row['c_name'];  ?>"><?php echo $row['c_name']; ?></option>

                                <?php  } ?>
                            </select>
                        </p>
                        <p>Product Name</p>
                        <p><input type="text" name="pname" value="<?php echo $row['p_name']; ?>" /></p>
                        <p>Product Image</p>
                        <p><input type="file" name="pimg"></p>
                        <img src="img/p_image/<?php echo $row['image']; ?>" class="product"/>
                        <p>Price</p>
                        <p><input type="text" name="price"/></p>
                        <p><input type="submit" value="Add" name="add" class="btn btn-success" /></p>
                    </form>