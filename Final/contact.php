<?php
  require("common.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Contact us</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
             <link rel="stylesheet" href="css.css" type="text/css">
    </head>
    <body>
        <?php
        include 'header.php';
        ?>
<div class="container">

<div class="row row_style">
    <div class="col-sm-10">
        <h1>LIVE SUPPORT</h1>
        <h3>24 hours|7 days a week| 365 days a year Live Technical Support</h3>
        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters. There are many variations of passages of Lorel Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
    </div>
    <div class="col-sm-2">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTz67YxMn-iTWsfPM0ravexmED0cG6unAPed0jkQCFt3Kjw1Y2u&usqp=CAU" alt="contact">
    </div>
</div>
<div class="row">
    <div class="col-sm-8">
        <h2>CONTACT US</h2>
        <form>            		
                <div class="form-group">
                        <label for="name">Name</label>
	<input type="text" name="name" class="form-control" required="true">
	</div>
	<div class="form-group">
                    <label for="email">Email:</label>
	<input type="email" name="email" class="form-control" required="true">
	</div>
	<div class="form-group">
                    <label for="message">Message:</label>
	<textarea name="message" id="message" required="true" class="form-control" rows="5"></textarea>
	</div>
	<div class="form-group">
	<input type="submit" name="submit" class="btn btn-primary" value="Submit">
                   </div>
        </form>
</div>
    <div class="col-sm-4">
        <h1>Company Information</h1>
        <p>500 Lorem Ipsum Dolar Sit,</p>
        <p>22-56-2-9 Sit Amet, Lorem,</p>
        <p>USA</p>
        <p>Phone:(00) 222 666 444</p>
        <p>Fax:(000) 000 00 00 0</p>
        <p>Email: info@estore.com</p>
        <p>Follow on: Facebook, Twitter</p>
    </div>   
    
</div>
</div>
        <?php
        include 'footer.php';
        ?>
    </body>
</html>