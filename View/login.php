<?php include_once '../template/header.php'; ?>
<?php include_once '../template/nav-bar.php'; ?>


<div class="container">
    <div class="row" >
        <div class="col-sm-8 col-sm-offset-3">
            <div class="well">
                <h2 style="text-align:left; margin-left: 33%">Login</h2>
                <form id="login-form" action="" method="post" role="form" style="display: block;">

                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-4 col-sm-offset-3">
                                <input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email" >
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-4 col-sm-offset-3">
                                <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
                            </div>
                        </div>
                    </div>
                    <div class="form-group text-center">
                        <div class="row">
                            <div class="col-sm-4 col-sm-offset-3">
                                <input type="checkbox" tabindex="3" class="" name="remember" id="remember">
                                <label for="remember"> Remember Me</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-2 col-sm-offset-4">
                                <input type="submit" name="login-submit" id="login-submit"  class="form-control btn btn-login" value="Log In">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-2 col-sm-offset-4">
                                <div class="text-center">
                                    <a href="http://phpoll.com/recover" tabindex="5" class="forgot-password">Forgot Password?</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-2 col-sm-offset-4">
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
<?php include_once '../template/footer.php'; ?>
<?php include_once '../template/foot-scripts.php'; ?>
