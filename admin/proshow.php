<!DOCTYPE html>
<html>
<?php
include("adminpartials/session.php");
include("adminpartials/head.php");
?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <?php
    include("adminpartials/header.php");
    include("adminpartials/aside.php");
    ?>
    <!-- Left side column. contains the logo and sidebar -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Dashboard
                <small>Version 2.0</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Dashboard</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Info boxes -->
            <div class="row">
                <div class="col-sm-9">

                    <?php
                    include('../partials/connect.php');
                    $id = $_GET['pro_id'];
                    $sql = "SELECT * FROM products WHERE id='$id'";
                    $results = $connect->query($sql);

                    $final = $results->fetch_assoc();
                    ?>
                    <h3>Name : <?php echo $final['name'] ?></h3>
                    <hr>
                    <hr>
                    <h3>Price : <?php echo $final['price'] ?></h3>
                    <hr>
                    <hr>
                    <h3>Description : <?php echo $final['description'] ?></h3>
                    <hr>
                    <hr>
                    <img src="<?php echo $final['pricture'] ?>" alt="<?php echo $final['name'] ?>" style="height: auto;width: 300px">


                </div>

                <div class="col-sm-3">

                </div>
        </section>

        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <?php
    include("adminpartials/footer.php");
    ?>
</body>
</html>
