<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../style/list.css">
    <title>User List</title>
</head>
<body>

<header>
    <div class = "title">USER LIST</div>
    <div class = "cambioListas">
        <div class="boton">
            <a href="../lists/WorkOrderList.php"><img src="/media/images/workorder.png" alt="order" class="btn"></a>
        </div>
    </div>
</header>

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
</div>

<?php
$connection = "";
include "../connection/connection.php";

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
                <p>'. $field['user'] .'</p>
                 </div>
            </div>';
}
?>
