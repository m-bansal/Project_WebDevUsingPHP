<footer>
            <div class="container manualwidthcss">
                <div class="row">
                   <?php
	if(isset($_SESSION["email"])){ 
	?>
                    <div class="col-sm-4 col-sm-offset-1">
                        <h3>Information</h3><br>
                        <p><a href="about.php" style="color:#fff">About Us</a></p>
                        <p><a href="contact.php" style="color:#fff">Contact Us</a></p>
                    </div>
                    
                    <div class="col-sm-4 col-sm-offset-2">
                        <h3>Contact Us</h3><br>
                        <p>Contact: +91-123-000000</p>
                    </div>
                    <?php
	}else{
	?>
                    <div class="col-sm-4">
                        <h3>Information</h3><br>
                        <p><a href="about.php" style="color:#fff">About Us</a></p>
                        <p><a href="contact.php" style="color:#fff">Contact Us</a></p>
                    </div>
                    <div class="col-sm-4">
                        <h3>My Account</h3><br>
                        <p><a href="#" data-toggle="modal" data-target="#loginmodal" style="color:#fff">Login</a></p>
                        <p><a href="signup.php" style="color:#fff">Sign Up</a></p>
                    </div>
                    <div class="col-sm-4">
                        <h3>Contact Us</h3><br>
                        <p>Contact: +91-123-000000</p>
                    </div>
                    <?php
	}
	?>
                </div>
            </div>
        </footer>