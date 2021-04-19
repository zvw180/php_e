<?php
include ('../partials/connect.php');
$newid=$_GET['del_id'];

$sql="delete from products where id='$newid'";
if (mysqli_query($connect, $sql)) {
    header('location: productsshow.php');
} else {
    header('location:adminindex.php');
}
?>