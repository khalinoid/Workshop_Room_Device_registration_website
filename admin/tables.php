<?php include "includes/header.php"?>
<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Blank Page
                    <small>Subheading</small>
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-fw fa-table"></i> <a href="index.html">Tables</a>
                    </li>
                    <li class="active">
                    </li>
                </ol>
            </div>
        </div>
        <!-- /.row -->
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>branch_name</th>
                    <th>device_name</th>
                    <th>device_model</th>
                    <th>registered_by</th>
                    <th>serial_num</th>
                    <th>discription</th>
                    <th>status</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include "../includes/database.php";
                $query=mysqli_query($connect,"SELECT * FROM devices");
                $i=1;
                while($row = mysqli_fetch_assoc($query)){
                    $device_id = $row['id']; 
                    $branch_name = $row['branch_name']; 
                    $device_name = $row['device_name']; 
                    $device_model = $row['device_model']; 
                    $registered_by = $row['registered_by']; 
                    $serial_num = $row['serial_num']; 
                    $discription = $row['discription']; 
                    $status = $row['status']; 

                    echo "<tr>";
                    echo "<td> $i</td>";
                    echo "<td>$branch_name</td>";
                    echo "<td>$device_name</td>";
                    echo "<td>$device_model</td>";
                    echo "<td>$registered_by</td>";
                    echo "<td>$serial_num</td>";
                    echo "<td>$discription</td>";
                    echo "<td>$status</td>";
                    echo "<td><a href='tables.php?repaired=$device_id'>Repaired</a></td>";
                    echo "<td><a href='tables.php?pending=$device_id'>Pending</a></td>";
                    echo "<td><a href='tables.php?delete=$device_id'>Delete</a></td>";
                    echo "<tr>";
                }?>
            </tbody>

            <?php
            if(isset($_GET['repaired'])){
                $get_id = $_GET['repaired'];
                $query = "UPDATE devices SET status = 'repaired' WHERE id = $get_id";

                $approve_device_query = mysqli_query($connect,$query);
                header("Location: tables.php");
            }

            if(isset($_GET['pending'])){
                $get_id = $_GET['pending'];
                $query = "UPDATE devices SET status = 'pending' WHERE id = $get_id";

                $approve_device_query = mysqli_query($connect,$query);
                // header("Location: tables.php");
            }
            if(isset($_GET['delete'])){
               echo $get_id = $_GET['delete'];
                $query = "DELETE FROM devices WHERE id = $get_id";

                $approve_device_query = mysqli_query($connect,$query);
                // header("Location: tables.php");
            }
            ?>

            <!-- here disrcrio cotrltet -->
    </div>
    <!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->
<?php include "includes/footer.php"?>