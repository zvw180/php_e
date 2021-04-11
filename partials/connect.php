<?php
$host = "localhost";
$user="root";
$password ="ptn141122";
$dbname="phpstore";
$connect=mysqli_connect($host,$user,$password,$dbname);
if ($connect->connect_errno){
    echo "no";
}else{
    echo "yes";
}

?>