<?php include_once '../template/header.php'; ?>
<?php include_once '../template/nav-bar.php'; ?>

<div class="row" style="margin-left:30%; margin-right: auto;padding-top: 20">
    <div class="col-lg-6">
        <div class="well">
            <h2 style="text-align:center;">Registration</h2>
            <form id="register-form" action="registered.php" method="POST" role="form" style="">
                <div class="form-group">
                    <input type="text" name="name" id="name" tabindex="1" class="form-control" placeholder="Name">
                </div>
                <div class="form-group">
                    <input type="text" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address" value="">
                </div>
                <div class="form-group">
                    <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
                </div>
                <div class="form-group">
                    <input type="password" name="confirm-password" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirm Password">

                </div>
                <div class="form-group">
                    <input type="text" name="postCode" id="postCode" tabindex="1" class="form-control" placeholder="Post Code" value="">
                </div>


               <label>Gender:</label>


                <div class="radio">
                    <label><input type="radio" name="optradio" checked="">Male</label>
                </div>
                <div class="radio">
                    <label><input type="radio" name="optradio">Female</label>
                </div>
                <div class="radio disabled">
                    <label><input type="radio" name="optradio" disabled>Others</label>
                </div>              
                
                

                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3">
                            <input type="submit" name="register" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Register">
                        </div>
                    </div>
                    <div align="center">
                        <a href="login.php"><p>Are you registered?Please Login!!!</p></a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php include_once '../template/footer.php'; ?>
<?php include_once '../template/foot-scripts.php'; ?>