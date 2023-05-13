<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/list.css">
    <title>User List</title>
</head>
<body>

<header>
    <div class="telovendoheader"><img src="../css/img/telovendo2.png" alt=""></div>
</header>




<nav>
    <div class = "boton"><a href="Userlist.php">Users</a></div>
    <div class = "boton"><a href="Productlist.php">Products</a></div>
</nav>

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
        <h4>Availability</h4>
    </div>
    <div class="field" style="background-color:rgb(35, 34, 34); color: bisque";>
        <h4>Functions</h4>
    </div>
</div>

<?php



$connection = "";
include "../model/connection/connection.php";

$isAvailable = "";

$result= mysqli_query($connection,"SELECT * FROM products") or die(mysqli_error());

while($field = mysqli_fetch_array( $result )){

    if($field['available'] == 1){
        $field['available'] = $isAvailable;
        $isAvailable = $field['product_name']." is in stock";


    } else{
        $field['available'] = $isAvailable;
        $isAvailable = $field['product_name']." is not in stock";

    }

    if($field['user_id'] == ""){
        $field['user_id'] = "User not assigned";
    }

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
                <p>'. $isAvailable .'</p>
                 </div>
                <div class="crud">      
                <a href="../controller/DeleteProduct.php?id=' . $field['id'] . '"><img class="icon" src="../css/icons/delete.png" alt="Delete"></a>
                 </div>
            </div>';
}


?>
