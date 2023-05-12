<?php
$connection = "";
include "../model/connection/connection.php";

function renderForm($name, $surname, $user, $email, $error)
{
    ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/form.css">
    <title>Create User</title>
</head>
<body>

<div id="content">
    <h1 class="register">REGISTER A USER</h1>

    <form class ="registerUser" action="" method="post">
        <!--<input type="hidden" name="id" value="<?php //echo $id; ?>"/>-->
        <div class="field">
            <label class="label" >*Name</label>
            <input class="inp" type="text" name="name" value="">
        </div>
        <div class="field">
            <label class="label" >*Surname</label>
            <input class="inp" type="text" name="surname" value="">
        </div>
        <div class="field">
            <label class="label" >*Email</label>
            <input class="inp" type="text" name="email" value=""
        </div>

        <div class="field">
            <label class="label" >*Username</label>
            <input class="inp" type="text" name="username" value=""
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
    $name = htmlspecialchars($_POST['name']);
    $surname = htmlspecialchars($_POST['surname']);
    $email = htmlspecialchars($_POST['email']);
    $user = htmlspecialchars($_POST['username']);


    if ($name == '' || $surname == '' || $email == '' || $user == '') {
        $error = 'ERROR: Please, Introduce the required field!';
        renderForm($name, $surname,$email,$user, $error);
    } else {
        $query = "INSERT users SET name='$name', surname = '$surname', email = '$email', user= '$user'"
        or die(mysqli_error());
        mysqli_query($connection, $query);


    }

    header("Location: ../view/Userlist.php");
    } else {
        renderForm('', '', '', '',"");
    }
?>
