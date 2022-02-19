<!DOCTYPE html>
<html lang="en">

<head>

    <title>Commercial Bank of Ethiopia | Homepage</title>

    <?php include "includes/header.php" ?>
    <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav navbar-nav-first">
            <li class="active"><a href="index.php">Home</a></li>
            <li><a href="reg.php">Register</a></li>
            <li><a href="admin/index.php">Admin</a></li>
        </ul>
    </div>

    </div>
    </section>
    <!-- HOME -->
    <section id="home">
        <div class="row">
            <div class="owl-carousel owl-theme home-slider">
                <div class="item item-first">
                    <div class="caption">
                        <div class="container">
                            <div class="col-md-6 col-sm-12">
                                <h1>Lorem ipsum dolor sit amet.</h1>
                                <h3>Voluptas dignissimos esse, explicabo cum fugit eaque, perspiciatis quia ab nisi
                                    sapiente delectus eiet.</h3>
                                <!-- <a href="reg-detail.php" class="section-btn btn btn-default">Read Blog</a> -->
                            </div>

                        </div>
                    </div>
                </div>
                <div class="item item-second">
                    <div class="caption">
                        <div class="container">
                            <div class="col-md-6 col-sm-12">
                                <h1>Lorem ipsum dolor sit amet.</h1>
                                <h3>Voluptas dignissimos esse, explicabo cum fugit eaque, perspiciatis quia ab nisi
                                    sapiente delectus eiet.</h3>
                                <!-- <a href="reg-detail.php" class="section-btn btn btn-default">Read Blog</a> -->
                            </div>

                        </div>
                    </div>
                </div>

                <div class="item item-third">
                    <div class="caption">
                        <div class="container">
                            <div class="col-md-6 col-sm-12">
                                <h1>Lorem ipsum dolor sit amet.</h1>
                                <h3>Voluptas dignissimos esse, explicabo cum fugit eaque, perspiciatis quia ab nisi
                                    sapiente delectus eiet.</h3>
                                <!-- <a href="reg-detail.php" class="section-btn btn btn-default">Read Blog</a> -->
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <main>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="text-center">
                            <h2>About us</h2>

                            <br>

                            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore
                                molestias ipsa veritatis nihil iusto maiores natus dolor, a reiciendis corporis
                                obcaecati ex. Totam assumenda impedit aut eum, illum distinctio saepe explicabo.
                                Consequuntur molestiae similique id quos, quasi quas perferendis laboriosam, fugit natus
                                odit totam! Id dolores saepe, sint debitis rerum dolorem tempora aliquid, pariatur enim
                                nisi. Quia ab iusto assumenda.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="section-title text-center">
                            <h2>Latest Registered materials <small>All materials that is registered and imported for
                                    maintainance will be displayed here.</small></h2>
                        </div>
                    </div>

                    <?php
                    include "includes/database.php";
                    $query = "SELECT * FROM devices";
                    $device_list = mysqli_query($connect,$query);
                    while ($row = mysqli_fetch_assoc($device_list)) {
                        echo $row['file_path'];?>
                    <div class="col-md-4 col-sm-4">
                        <div class="courses-thumb courses-thumb-secondary">
                            <div class="courses-top">
                                <div class="courses-image">
                                    <img src="uploads/<?php echo $row['file_path']?>" class="img-responsive" alt="">
                                </div>
                                <div class="courses-date">
                                    <span title="Author"><i class="fa fa-user"></i>
                                        <?php echo $row['registered_by']?></span>
                                    <span title="Date"><i class="fa fa-calendar"></i><?php echo $row['created_at']?>
                                    </span>
                                </div>
                            </div>

                            <div class="courses-detail">
                                <h3><a href="reg-detail.php"><?php echo $row['discription']?></a></h3>
                            </div>

                            <div class="courses-info">
                                <a href="reg-detail.php" class="section-btn btn btn-primary btn-block">Read
                                    More</a>
                            </div>
                        </div>
                    </div>
                    <?php }?>
                </div>
            </div>
        </section>
    </main>
    </section>
    <?php include "includes/footer.php" ?>