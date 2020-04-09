<?php include_once 'template/header.php'; ?>
<?php include_once 'template/nav-bar.php'; ?>

<div class="row" style="margin-left:30%; margin-right: auto;padding-top: 20">
    <div class="col-lg-6">
        <div class="well">
            <h2 style="text-align:center;">Registration</h2>
            <h2 style="text-align:center;"><?php if(isset($_SESSION['msg'])) echo $_SESSION['msg'];?></h2>
            <form id="register-form" action="registered.php" method="POST" role="form" style="">
                <div class="form-group">
                    <input type="text" name="name" id="name" tabindex="1" class="form-control" placeholder="Name" required>
                </div>
                <div class="form-group">
                    <input type="text" name="email" id="email" tabindex="2" class="form-control" placeholder="Email Address" value="" required>
                </div>
                <div class="form-group">
                    <input type="text" name="number" id="number" tabindex="3" class="form-control" placeholder="Mobile Number" value="" required>
                </div>
                <div class="form-group">
                    <textarea rows="10" cols="64" placeholder="Address" tabindex="4" name="address" required></textarea>
                </div>
                <div class="form-group">
                    <input type="password" name="password" id="password" tabindex="5" class="form-control" placeholder="Password" required>
                </div>
                <div class="form-group">
                    <input type="password" name="confirm-password" id="confirm-password" tabindex="6" class="form-control" placeholder="Confirm Password" required>
                </div>
                <div class="form-group">
                    <input type="text" name="postCode" id="postCode" tabindex="7" class="form-control" placeholder="Post Code" value="" required>
                </div>

                <div class="form-group">
               <label>Gender:</label>


                
               <input type="radio" name="gender" value="male"checked="">Male
               <input type="radio" name="gender" value="female">Female
                    <input type="radio" name="optradio" disabled>Others
                         
                </div>
                

                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3">
                            <input type="submit" name="register" id="register-submit" tabindex="8" class="form-control btn btn-success" value="Register">
                        </div>
                    </div>
                    <div align="center">
                        <br><a href="login.php"><p>Are you registered?Please Login!!!</p></a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php include_once 'template/footer.php'; ?>
<?php include_once 'template/foot-scripts.php'; ?>