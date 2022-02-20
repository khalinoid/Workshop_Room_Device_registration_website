<!DOCTYPE html>
<html lang="en">
<?php session_start();?>

<head>

    <title>Commercial Bank of Ethiopia | Registration page</title>

    <?php include "includes/header.php" ?>


    <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav navbar-nav-first">
            <li><a href="index.php">Home</a></li>
            <li><a href="reg.php">Register</a></li>
            <li><a href="admin/index.php">Admin</a></li>

        </ul>
    </div>

    </div>
    </section>

    <section>
        <div class="container">
            <div class="text-center">
                <h1>Registration Page</h1>

                <br>

                <p class="lead">Pleace register an imported device here.</p>
            </div>
        </div>
        <div class="container">


            <div class="row">

                <h4>Devices</h4>


                <br>


                <form role="form" action="includes/function.php" method="POST" enctype="multipart/form-data"
                    class="form">

                    <div class="row">
                        <div class="col-sm-6 col-xs-6">
                            <div class="form-group">
                                <label class="control-label">Branch Name</label>

                                <input type="text" name="branch_name" class="form-control">
                            </div>
                        </div>

                        <div class="col-sm-6 col-xs-6">
                            <div class="form-group">
                                <label class="control-label">Deice Name</label>

                                <input type="text" name="device_name" class="form-control">
                            </div>
                        </div>

                    </div>

                    <div class="row">

                        <div class="col-sm-6 col-xs-6">
                            <div class="form-group">
                                <label class="control-label">Modle</label>

                                <input type="text" name="device_model" class="form-control">
                            </div>
                        </div>


                        <div class="col-sm-6 col-xs-6">
                            <div class="form-group">
                                <label class="control-label">Serial Number</label>
                                <input type="text" name="serial_number" class="form-control">
                            </div>
                        </div>

                        <div class="col-sm-6 col-xs-6">
                            <div class="form-group">
                                <label class="control-label">Device picture</label>

                                <input type="file" name="file" class="form-control">
                            </div>
                        </div>

                        <div class="col-sm-6 col-xs-6">
                            <div class="form-group">
                                <label class="control-label">Registered by</label>

                                <input type="text" name="registered_by" class="form-control">
                            </div>
                        </div>



                    </div>
                    <div class="form-group">
                        <label class="control-label">Some Discription About the device</label>

                        <textarea name="content" class="form-control" rows="10" autocomplete="off"></textarea>
                    </div>

                    <div class="text-center">
                        <div class="card-footer">
                            <button id="submit" type="submit" name="submit" value="Upload"
                                class="submit btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
                <?php// if(isset($_SESSION['message'])) echo $_SESSION['message'];?>


            </div>
        </div>
    </section>
    <?php include "includes/footer.php" ?>
    <script>
    $(document).ready(function() {

        $("#submit").on('click', function() {
            alert("<?php if(isset($_SESSION['message'])) echo $_SESSION['message'] ?>");
        });
    });
    </script>