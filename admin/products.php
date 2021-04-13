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
                    <form role="form">
                        <h1>Products</h1>
                        <div class="box-body">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name"
                                       placeholder="Enter Product Name">
                            </div>
                            <div class="form-group">
                                <label for="price">Price</label>
                                <input type="text" class="form-control" id="price"
                                       placeholder="Price">
                            </div>
                            <div class="form-group">
                                <label for="picture">File input</label>
                                <input type="file" id="picture">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea  id="description" class="form-control"  rows="10" placeholder="Enter Description"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="category">Category</label>
                            <select  id="category">
                                <option >Shirts</option>
                                <option>Pants</option>
                            </select>
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
