<?php
$connection = "";
include "../model/connection/connection.php";

if (isset($_GET['id']) && is_numeric($_GET['id'])) {

    $id = $_GET['id'];

    $queryDeleteProduct = "DELETE FROM products WHERE id=$id" or die(mysqli_error());
    $resultDeleteProduct = mysqli_query($connection, $queryDeleteProduct);


    header("Location: ../view/Productlist.php");
}