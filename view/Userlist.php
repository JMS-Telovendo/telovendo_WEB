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
        <h4>User_id</h4>
    </div>
    <div class="field">
        <h4>Name</h4>
    </div>
    <div class="field">
        <h4>Surname</h4>
    </div>
    <div class="field">
        <h4>Username</h4>
    </div>
    <div class="field" style="background-color:rgb(35, 34, 34); color: bisque";>
        <h4>Functions</h4>
    </div>
</div>

<?php
$connection = "";
include "../model/connection/connection.php";

$isAvailable="";

$result= mysqli_query($connection,"SELECT * FROM users") or die(mysqli_error());

while($field = mysqli_fetch_array( $result )){

    echo '<div class = "registers">
                <div class="field">       
                <p>'. $field['id'] .'</p>
                </div>
                <div class="field">
                <p>'. $field['name'].'</p>
                 </div>
                  <div class="field">
                <p>'. $field['surname'] .'</p>
                 </div>
                 <div class="field">
                <p>'. $field['user'] . '</p>
                 </div>
                   <div class="crud">
                <a href="../controller/CreateUser.php"><img class="icon" src="../css/icons/add.png" alt="Register"></a>
                <a href="../controller/DeleteUser.php?id=' . $field['id'] . '"><img class="icon" src="../css/icons/delete.png" alt="Delete"></a>
                 </div>
            </div>';
}
?>
