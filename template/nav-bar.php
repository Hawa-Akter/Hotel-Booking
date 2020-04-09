<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?=BASE_URL?>/index.php">Woodlands Away</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">

                <?php if (isset($_SESSION['role']) && $_SESSION['role'] == 0) { ?>
                    <li>
                        <a href="add-package.php">Add Package</a>
                    </li>
                    <li>
                        <a href="manage-package.php">Manage Package</a>
                    </li>
                    <li>
                        <a href="manage-booking.php">Manage Booking</a>
                    </li>
                <?php } else { ?>
                    <li>
                        <a href="<?=BASE_URL?>/index.php">Home</a>
                    </li>
                    <li>
                        <a href="<?=BASE_URL?>/Special-offer.php">Special Offer</a>
                    </li>
                    <li>
                        <a href="<?=BASE_URL?>/calender.php">Event Calender</a>
                    </li>
                    <?php } ?>
                    <?php if (!isset($_SESSION['id'])) { ?>
                        <li>
                            <a href="login.php"><span class="glyphicon glyphicon-log-in"> </span> Login</a>
                        </li>
                        <li>
                            <a href="registration.php">Registration</a>
                        </li>
                    <?php } else { ?>
                        <li>
                            <a href="<?=BASE_URL?>/logout.php"><span class="glyphicon glyphicon-log-out"> </span> Logout-<?php echo $_SESSION['username'] ?></a>
                        </li>
                    <?php } ?>


            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>