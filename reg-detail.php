<!DOCTYPE html>
<html lang="en">

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

    <?php 
    if(isset($_GET['more'])){
        $detail = $_GET['more'];
        include "includes/database.php";
        $query = "SELECT * FROM devices WHERE id = $detail";
        $more_list = mysqli_query($connect,$query);
        while ($row = mysqli_fetch_assoc($more_list)) {
    ?>


    <section>
        <div class="container">
            <h2><?php echo $row['device_name'] ?></h2>

            <p class="lead">
                <i class="fa fa-user"></i> Registered by <?php echo $row['registered_by'] ?> &nbsp;&nbsp;&nbsp;
                <i class="fa fa-calendar"></i> Registered at : <?php echo $row['created_at'] ?> &nbsp;&nbsp;&nbsp;
                <i class="fa fa-eye"></i> Device status : <?php echo $row['status'] ?> &nbsp;&nbsp;&nbsp;

            </p>

            <img src="uploads/<?php echo $row['file_path'] ?>" class="img-responsive" alt="">

            <br>

            <?php echo $row['discription'] ?>

            <br>
            <br>

            <div class="row">
                <div class="col-md-4 col-xs-12 pull-right">
                    <h4>Social share</h4>

                    <p>
                        <a href="#" target="_blank"><i class="fa fa-facebook"></i></a> &nbsp;&nbsp;&nbsp;

                        <a href="#" target="_blank"><i class="fa fa-twitter"></i></a> &nbsp;&nbsp;&nbsp;

                        <a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
                    </p>

                    <br>


                    <h4>Other posts</h4>

                    <ul class="list">
                        <li><a href="blog-post-details.html">Lorem ipsum dolor sit amet, consectetur adipisicing.</a>
                        </li>
                        <li><a href="blog-post-details.html">Et animi voluptatem, assumenda enim, consectetur
                                quaerat!</a>
                        </li>
                        <li><a href="blog-post-details.html">Ducimus magni eveniet sit doloremque molestiae alias
                                mollitia
                                vitae.</a></li>
                    </ul>
                </div>

                <div class="col-md-8 col-xs-12">
                    <h4>Comments</h4>

                    <p>No comments found.</p>

                    <br>

                    <h4>Leave a Comment</h4>

                    <form action="#" class="form">

                        <div class="row">
                            <div class="col-sm-6 col-xs-6">
                                <div class="form-group">
                                    <label class="control-label">Name</label>

                                    <input type="text" name="name" class="form-control">
                                </div>
                            </div>

                            <div class="col-sm-6 col-xs-6">
                                <div class="form-group">
                                    <label class="control-label">Email</label>

                                    <input type="email" name="email" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Message</label>

                            <textarea name="comment" class="form-control" rows="10" autocomplete="off"></textarea>
                        </div>

                        <button type="submit" class="section-btn btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <?php }}?>
    <?php include "includes/footer.php" ?>