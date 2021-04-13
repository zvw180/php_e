<!DOCTYPE html>
<html>
<?php
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
                <div class="col-sm-3">
                </div>
                <div class="col-sm-6">
                    <!-- form start -->
                    <form role="form" method="post" action="cathandler.php">
                        <h1>Categories</h1>
                        <div class="box-body">
                            <div class="form-group">
                                <label for="category">Categories</label>
                                <input type="text" class="form-control" id="category" name="name"
                                       placeholder="Enter Category">
                            </div>
                        </div>
                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
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
