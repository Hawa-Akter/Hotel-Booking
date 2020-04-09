
<?php
session_start();
if (!isset($_SESSION['id'])) {
    header('location:login.php');
}
?>


<?php include_once 'template/header.php'; ?>
<?php include_once 'template/nav-bar.php'; ?>
<?php
if (isset($_SESSION['role']) && $_SESSION['role'] == 0) {
    header('location:admin/add-package.php');
}
?>
<?php
include_once 'dbCon.php';
$conn = connect();
$sql = "select * from packages where home_page_item=1 and special=0";
$result = $conn->query($sql);

$sql1="select * from query";
$query=$conn->query($sql1);



?>
<script>
    var fromCurrency = 'GBP';
</script>



<!-- Header Carousel -->
<header id="myCarousel" class="carousel slide">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <div class="item active">
            <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide One');"></div>
            <div class="carousel-caption">
                <h2>Caption 1</h2>
            </div>
        </div>
        <div class="item">
            <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Two');"></div>
            <div class="carousel-caption">
                <h2>Caption 2</h2>
            </div>
        </div>
        <div class="item">
            <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Three');"></div>
            <div class="carousel-caption">
                <h2>Caption 3</h2>
            </div>
        </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="icon-prev"></span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="icon-next"></span>
    </a>
</header>

<!-- Page Content -->
<div class="container">

    <!-- Marketing Icons Section -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Welcome to WoodlandsAway
            </h1>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class=" form-group col-sm-6 ">
                    <label for="inputPassword3" class="col-sm-6 control-label">Chose Your Local Currency:</label>
                    <select id='currency' class="col-sm-3 form-control ">
                        <option value='GBP'>GBP</option>
                        <option value='USD'>USD</option>
                        <option value='EUR'>EUR</option>
                    </select>
                </div>
            </div>
        </div>
        <?php foreach ($result as $row) { ?>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw"></i><?php echo $row['cabin_type'] ?></h4>
                    </div>
                    <img src="admin/<?php echo $row['image'] ?>" alt="img" height="200" width="100%">


                    <div class="panel-body">
                        <h4><b>Number of Adult:&nbsp;</b><?= $row['num_of_adult'] ?></h4>
                        <h4 class="pull-right package-price">Price:&nbsp;<?= $row['package_price'] ?></h4>
                        <input type="hidden" class="package-base-price" value="<?= $row['package_price'] ?>" />
                        <h4><b>Start Date:&nbsp;</b><?= $row['start_date'] ?></h4>
                        <h4><b>End Date:&nbsp;</b><?= $row['end_date'] ?></h4>
                        <h4><b>Total Time:&nbsp;</b><?= $row['package_period'] ?></h4>

                        <a href="booking.php?id=<?php echo $row['package_id'] ?>" class="btn btn-info">Book</a>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
    <!-- /.row -->

    <!-- Portfolio Section -->
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header" style="text-align: center">Forum </h2>
        </div>
        <div class="col-md-4 col-sm-6 scroll">
            <form  action="forum.php" method="post" >
                <div class="form-group">
                    <h4 class="text-center "><span class="text-primary">General Query</span></h4>
                    <h4 class="text-center "><span class="text-success"><?php if (isset($mesage)) echo $mesage; ?></span></h4>
                    <div>
                        <textarea class="form-control" name="general_query"></textarea>
                    </div>
                    <div style="text-align:center; ">
                        <input type="submit" value="Ask?" class=""name="submit"/>
                    </div>
            </form>
            
            <?php while ($question = mysqli_fetch_assoc($query)) { ?>
            <form method="post" action="forum.php">
                <h4><b><?= $question['id'] ?>. <?= $question['general_query'] ?></b></h4>
                    <?php 
                    $id=$question['id'];
                    $sql3="select * from answers where question_id='$id'";
                    $answers=$conn->query($sql3);
                    ?>
                    <?php while ($resultOfAnswer = mysqli_fetch_assoc($answers)) { ?>
                    <h5><span class="text-primary">Ans:</span> <?= $resultOfAnswer['answer'] ?></h5>

    <?php } ?>
                    <!--<input type="text" name="answr" />-->
                   
                    <textarea name="answer" class="form-control"></textarea>
                    <input type="hidden" name="ques_id" value="<?= $question['id'] ?>"/>
                    <input type="submit" name="ans" class="btn btn-success btn-xs" value="Answer" />
                </form>

<?php } ?>
        </div>


<?php include_once 'template/footer.php'; ?>

    </div>

    <!-- /.container -->

<?php include_once 'template/foot-scripts.php'; ?>