<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../style/list.css">
    <title>User List</title>
</head>
<body>

<header>
    <div class = "title">PRODUCT LIST</div>
    <div class = "cambioListas">
        <div class="boton">
            <a href="../lists/Userlist.php"><img src="/media/images/user.png" alt="order" class="btn"></a>
        </div>
    </div>
</header>

<div class = "column_name">
    <div class="field">
        <h4>Product_id</h4>
    </div>
    <div class="field">
        <h4>User_id</h4>
    </div>
    <div class="field">
        <h4>Product</h4>
    </div>
    <div class="field">
        <h4>Category</h4>
    </div>
    <div class="field">
        <h4>Price</h4>
    </div>
    <div class="field">
        <h4>Available</h4>
    </div>
</div>

<?php
$connection = "";
include "../connection/connection.php";

$result= mysqli_query($connection,"SELECT * FROM products") or die(mysqli_error());

while($field = mysqli_fetch_array( $result )){

    echo '<div class = "registers">
                <div class="field">       
                <p>'. $field['id'] .'</p>
                </div>
                <div class="field">
                <p>'. $field['user_id'].'</p>
                 </div>
                  <div class="field">
                <p>'. $field['product_name'] .'</p>
                 </div>
                 <div class="field">
                <p>'. $field['category'] .'</p>
                 </div>
                 <div class="field">
                <p>'. $field['price'] .'</p>
                 </div>
                 <div class="field">
                <p>'. $field['available'] .'</p>
                 </div>
            </div>';
}
?>
