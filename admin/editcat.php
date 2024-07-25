<?php
include("inc/db.php");
$id=$_GET['eid'];

$sel="SELECT * FROM category WHERE cid='$id'";
$rs=$con->query($sel);
$row=$rs->fetch_assoc();
?>
<form action="inscat.php" method="post">
                        <p>Parent</p>
                        <p>
                            <select name="parent">
                                <option value="0">No Parent</option>
                                <?php
                                $sel="SELECT * FROM category WHERE pid='0'";
                                $rs=$con->query($sel);
                                while($row=$rs->fetch_assoc()){
                                ?>
                                <option value="<?php echo $row['cid'];  ?>"><?php echo $row['c_name']; ?></option>

                                <?php  } ?>
                            </select>
                        </p>
                        <p>Category</p>
                        <p><input type="text" name="cname" value="<?php echo $row['c_name']; ?>"/></p>
                        <p><input type="submit" value="Add" name="add" class="btn btn-success"/></p>
                    </form>