<?php
$connection = "";
include "../model/connection/connection.php";

function renderForm($name, $category, $price, $user_id, $available, $error)
{
    ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/form.css">
    <title>Create Product</title>
</head>
<body>

<div id="content">
    <h1 class="register">REGISTER A PRODUCT</h1>

    <form class ="registerUser" action="" method="post">
        <!--<input type="hidden" name="id" value="<?php //echo $id; ?>"/>-->
        <div class="field">
            <label class="label" >*Product</label>
            <input class="inp" type="text" name="name" value="">
        </div>
        <div class="field">
            <label class="label" >*Category</label>
            <input class="inp" type="text" name="category" value="">
        </div>
        <div class="field">
            <label class="label" >*Price</label>
            <input class="inp" type="number" name="price" value=""
        </div>

        <div class="field">
            <label class="label" >*User_id</label>
            <input class="inp" type="number" name="userid" value=""
        </div>

        <div class="check">
            <label class="label" >Is Available?:</label>
            <input class="inp" type="checkbox" name="available" value="1">

        </div>
        <input class = "btn" type="submit" name="submit" value="Register">

        <?php
        if ($error != '') {
            echo '<div style="background-color: red; margin:20px; padding:4px; border:1px solid red;color:#fff;">' . $error . '</div>';
        }
        ?>
</form>
</div>

</body>
</html>
<?php
}

if (isset($_POST['submit'])) {
    $name = htmlspecialchars($_POST['product_name']);
    $category = htmlspecialchars($_POST['category']);
    $price = htmlspecialchars($_POST['price']);
    $user_id = htmlspecialchars($_POST['user_id']);
    $available = htmlspecialchars($_POST['available']);


    if($_POST['available'] == 'value')
    {
        echo $name . " Available";
    }
    else
    {
        echo $name . " Not Available";

    }

    if ($name == '' || $category == '' || $price == '' || $user_id == ''|| $available == '') {
        $error = 'ERROR: Please, Introduce the required field!';
        renderForm($name, $category,$price,$user_id, $available, $error);
    } else {
        $query = "INSERT products SET product_name='$name', category = '$category', price = '$price', user_id= '$user_id'
        , available='$available'" or die(mysqli_error());
        mysqli_query($connection, $query);


    }

    header("Location: ../view/Productlist.php");
    } else {
        renderForm('', '', '', '',"");
    }
?>
