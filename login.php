<?php include_once 'template/header.php'; ?>
<?php include_once 'template/nav-bar.php'; ?>


<div class="container" style="padding-top: 30px">
    <div class="row" >
        <div class="col-sm-offset-3 col-sm-6 col-sm-offset-3">
            <div class="well">
                <div class="col-sm-offset-2  col-sm-8 col-sm-offset-2 ">
                    <h2 style="text-align: center">Login</h2>
                </div>
                 <h2 style="text-align:center;"><?php if(isset($_SESSION['msg'])) echo $_SESSION['msg'];?></h2>
                 <form id="login-form" action="loginCheker.php" method="post" role="form" style="display: block;">

                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-offset-2 col-sm-8 col-sm-offset-2">
                                <input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email" required="" value="<?php if(isset($_SESSION['input_email'])) echo $_SESSION['input_email']?>">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-offset-2 col-sm-8 col-sm-offset-2">
                                <input type="password" name="pass" id="password" tabindex="2" class="form-control" placeholder="Password" required="">
                            </div>
                        </div>
                    </div>
                    <div class="form-group text-center">
                        <div class="row">
                            <div class="col-sm-offset-2 col-sm-8 col-sm-offset-2">
                                <input type="checkbox" tabindex="3" class="" name="remember" id="remember">
                                <label for="remember"> Remember Me</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-offset-3 col-sm-6 col-sm-offset-3">
                                <input type="submit" name="login-submit" id="login-submit"  class="form-control btn btn-primary" value="Log In">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-offset-2 col-sm-8 col-sm-offset-2">
                                <div class="text-center">
                                    <a href="http://phpoll.com/recover" tabindex="5" class="forgot-password">Forgot Password?</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-offset-2 col-sm-8 col-sm-offset-2">
                                <div class="text-center">
                                    <a href="registration.php" tabindex="5" class="forgot-password">Don't have an account!Please register first</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include_once 'template/footer.php'; ?>
<?php include_once 'template/foot-scripts.php'; ?>
