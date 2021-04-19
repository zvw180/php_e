<?php
session_start();
if(isset($_SESSION['cart'])){
    $checker=array_column($_SESSION['cart'],'item_name');

    $count=count($_SESSION['cart']);
    $_SESSION['cart'][$count]=array('item_id'=>$_GET['cart_id']);
    echo "<script>window.location.href='product.php' </script>";
}else{
    $_SESSION['cart'][0]=array('item_id'=>$_GET['cart_id']);
    echo "<script>window.location.href='product.php' </script>";
}

?>
