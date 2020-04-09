<div class="col-md-6 col-md-offset-3">
    <div class="panel panel-login">
        <div class="panel-heading">
            <div class="row">
                <div class="col-xs-12">

                    <a href="#" id="register-form-link">Add Package</a>
                </div>
            </div>
            <hr>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-lg-12">
                    <form id="add_package" action="" method="POST" role="form" enctype="multipart/form-data" >
                        <input type="hidden" name="id" value="">
                        <div class="form-group">
                            <input type="text" name="name" id="name" tabindex="1" class="form-control" placeholder="Name" value="<?php if (isset($name)) echo $name; ?>">
                        </div>
                        <div class="form-group">
                            <input type="text" name="price" id="email" tabindex="1" class="form-control" placeholder="Price" value="<?php if (isset($price)) echo $price; ?>">
                        </div>
                        <div class="form-group">
                            <input type="text" name="location" id="password" tabindex="2" class="form-control" placeholder="Location" value="<?php if (isset($location)) echo $location; ?>">
                        </div>
                        <div class="form-group">
                            <input type="date" name="start_date" id="confirm-password" tabindex="2" class="form-control" placeholder="Start Date" min="<?= $toDay ?>" value="<?php if (isset($startDate)) echo $startDate; ?>">
                        </div>
                        <div class="form-group">
                            <input type="date" name="end_date" id="confirm-password" tabindex="2" class="form-control" placeholder="End Date" min="<?= $toDay ?>" value="<?php if (isset($endDate)) echo $endDate; ?>">
                        </div>

                        <div class="form-group">
                            <input type="file" name="fileToUpload"  class="form-control" >
                        </div>
                        <div class="form-group">

                            <div class="row">

                                <div class="col-sm-6">
                                    <input type="submit" name="update_package" id="update_package" class="form-control btn btn-register" value="Update" <?php echo (!$editFlag) ? 'disabled' : ''; ?>>
                                </div>
                                <div class="col-sm-6">
                                    <input type="submit" name="add_package" id="add_package" class="form-control btn btn-register" value="Save" <?php echo ($editFlag) ? 'disabled' : ''; ?>>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>

    </div>

</div>
