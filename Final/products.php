<?php
include "common.php";
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>E-Store|Products</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.5.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css.css" type="text/css">
    </head>
    <body>
        <?php
        include 'header.php';
        include 'check-if-added.php';
        ?>
        <div class="container-fluid">
       <div class="row row_style">
                <div class="col-sm-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4>Mobile 1</h4>
                        </div>
                        <div class="panel-body panelsize">
                            <div class="thumbnail hideborder">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRPsxcm3Mv2xFA3nw0MvOel5tJ_8xAymrdumqhxZjRsarkFC3QgupISF7NyRQPKBmCrWn_FDYk&usqp=CAc" alt="Krypton Mobile Phone">
                                <div class="caption">
                                    <p>Krypton K5 Notch Smart Phone 8GB RAM 128GB ROM Sale</p>
                                    <p>Rs. 14000</p>
                                    <?php 
		//We have created a function to check whether this particular product is added to cart or not.
		if (check_if_added_to_cart(1)) { //This is same as if(check_if_added_to_cart !=0)
		echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
		} else {
		?>
		<a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
		<?php
		}
		?>
                                </div>
                            </div>                                                        
                        </div>
                    </div>
                </div>
          
                
                <div class="col-sm-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4>Mobile 2</h4>
                        </div>
                        <div class="panel-body panelsize">
                            <div class="thumbnail hideborder">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTf2KWa4LsFUG0B8l_fV0EmU4SMF0ffJZSv8OHR_3620IWaiWyAEBG1BUDeBpjxMZEKTIoVMA&usqp=CAc" alt="Samsung Mobile Phone">
                                <div class="caption">
                                    <p>Samsung Guru 1200  (Black)</p>
                                    <p>Rs. 7400</p>
                                    <?php 
                    	//We have created a function to check whether this particular product is added to cart or not.
		if (check_if_added_to_cart(2)) { //This is same as if(check_if_added_to_cart !=0)
		echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
		} else {
		?>
		<a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
		<?php
		}
		?>
                                </div>
                            </div>                                                        
                        </div>
                    </div>
                </div>
           
           <div class="col-sm-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4>Mobile 3</h4>
                        </div>
                        <div class="panel-body panelsize">
                            <div class="thumbnail hideborder">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSduksCuzle6jldSo5W6kCBwM-rHWMe7ouAg863p2xko4802Ex-Rtgl6IOwgw&usqp=CAc" alt="Redmi Mobile Phone">
                                <div class="caption">
                                    <p>Redmi Note 9 Pro 128GB (6GB RAM)</p>
                                     <p>Rs. 23000</p>
                                    <?php 
	//We have created a function to check whether this particular product is added to cart or not.
	if (check_if_added_to_cart(3)) { //This is same as if(check_if_added_to_cart !=0)
                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
	} else {
	?>
	<a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
	<?php
	}
	?>
                            </div>
                            </div>                                                        
                        </div>
                    </div>
                </div>
           </div>
    </div>
        
        <div class="container-fluid">
       <div class="row row_style">
           
                <div class="col-sm-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4>Mobile 4</h4>
                        </div>
                        <div class="panel-body panelsize">
                            <div class="thumbnail hideborder">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRjVFJMMRvVPX0hRv3PUJQPp_yhVJgUWv4rXhroReRvb7t_rum9lQtd3kvq&usqp=CAc" alt="Oppo Mobile Phone">
                                <div class="caption">
                                    <p>OPPO A9 2020 (Marine Green, 128 GB)  (4 GB RAM)</p>
                                    <p>Rs. 15110</p>
                                    <?php 
		//We have created a function to check whether this particular product is added to cart or not.
		if (check_if_added_to_cart(4)) { //This is same as if(check_if_added_to_cart !=0)
		echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                    	} else {
		?>
		<a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
		<?php
		}
                                       ?>
                                </div>
                            </div>                                                        
                        </div>
                    </div>
                </div>
                          
                <div class="col-sm-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4>Mobile 5</h4>
                        </div>
                        <div class="panel-body panelsize">
                            <div class="thumbnail hideborder">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcR7okQXQjSurKP-ayMe00LlGi74F5vQ25vuR1cJIhcaDcE96zBoUhES65tciJVXZj_cmNj78g&usqp=CAc" alt="Vivo Mobile Phone">
                                <div class="caption">
                                    <p>Vivo Y12 (Burgundy Red, 64 GB)  (3 GB RAM)</p>
                                    <p>Rs. 14570</p>
                                    <?php 
		//We have created a function to check whether this particular product is added to cart or not.
		if (check_if_added_to_cart(5)) { //This is same as if(check_if_added_to_cart !=0)
		echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
		} else {
		?>
		<a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
		<?php
		}
		?>
                                </div>
                            </div>                                                        
                        </div>
                    </div>
                </div>
           
           <div class="col-sm-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4>Mobile 6</h4>
                        </div>
                        <div class="panel-body panelsize">
                            <div class="thumbnail hideborder">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSH5luOT45RtSKnGuQ3N14EbLkjuZlVXcdT5xX7BEFJpzugZ6gGLXtlyZpB&usqp=CAc" alt="Apple Mobile Phone">
                                <div class="caption">
                                    <p>Apple iPhone 7 (Black, 32 GB)</p>
                                    <p>Rs. 34340</p>
                                    <?php 
		//We have created a function to check whether this particular product is added to cart or not.
		if (check_if_added_to_cart(6)) { //This is same as if(check_if_added_to_cart !=0)
		echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
		} else {
		?>
                        	<a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
		<?php
		}
		?>
                                </div>
                            </div>                                                        
                        </div>
                    </div>
                </div>
           </div>
    </div>