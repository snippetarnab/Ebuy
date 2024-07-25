<?php
include("inc/db.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="container">
        <div class="row">
            <div class="col-md-12">
            <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="javascript:void(0)">Home</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="aboutus.php">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contactus.php">Contact Us</a>
        </li>
      </ul>
      <p>
      <form action="" method="get">
      <input type="text" name="s" placeholder="Search..."/>
      <input type="submit" class="btn btn-primary" value="Search"  />
      </form>
      </p> 
    </div>
  </div>
</nav>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
            <div id="demo" class="carousel slide" data-bs-ride="carousel">

<!-- Indicators/dots -->
<div class="carousel-indicators">
  <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
  <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
  <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
</div>

<!-- The slideshow/carousel -->
<div class="carousel-inner">
  <div class="carousel-item active">
    <img src="image/offer.jpg" alt="Los Angeles" class="d-block" style="width:100%">
  </div>
  <div class="carousel-item">
    <img src="image/offer.jpg" alt="Chicago" class="d-block" style="width:100%">
  </div>
  <div class="carousel-item">
    <img src="image/offer.jpg" alt="New York" class="d-block" style="width:100%">
  </div>
</div>

<!-- Left and right controls/icons -->
<button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
  <span class="carousel-control-prev-icon"></span>
</button>
<button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
  <span class="carousel-control-next-icon"></span>
</button>
</div>
            </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <h1>Recent product</h1>
          </div>
        </div>
        <div class="row">
          
         
                <div class="col-md-3">
                    <?php
                    $sel="SELECT * FROM category WHERE pid!=0";
                    $rs=$con->query($sel);
                    while($row=$rs->fetch_assoc()){
                    ?>
                    <ul class="list-group">
                        <li class="list-group-item "><?php echo $row['c_name']; ?></li>
                        
                    </ul>
                    <?php } ?>
                </div>
                
                <div class="col-md-9">
                    <div class="row">
                            <?php 
                            $sel="SELECT * FROM product";
                            $rs=$con->query($sel);
                            while($row=$rs->fetch_assoc()){
                            ?>
                        <div class="col-md-3">
                            
                            <div class="card" >
                            <img class="card-img-top" src="admin/img/p_image/<?php echo $row['image']; ?>" alt="Card image">
                                <div class="card-body">
                                <h4 class="card-title"><?php echo $row['p_name']; ?></h4>
                                <p class="card-text"><?php echo $row['price']; ?></p>
                                <a href="#" class="btn btn-primary">Buy</a>
                                </div>
                            </div>
                            
                        </div>
                        <?php  }  ?>
                    </div>
                    
                </div>
                
        
          
        </div>
        
        
        

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>