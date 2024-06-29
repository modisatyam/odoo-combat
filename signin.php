<!-- <?php

require_once "partials\_navbar.php";


?> -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Registration</title>
</head>

<body>
<?php
 require "partials\_navbar.php";
?>
    <div class="regbox">
        <h1>Sign In</h1>
        <form action="" method="post" class="regform">
        
<?php
 if ($_SERVER["REQUEST_METHOD"] == "POST"){


    require "partials\_db_connect.php";

 $usern = $_POST['mobile'];
$usepass = $_POST['password'];
if($usern!=""&&$usepass!=""){
$sql="SELECT pass FROM `userdata` where phone='$usern' ";
           
           $result = mysqli_query($conn,$sql);
           $row = mysqli_fetch_assoc($result);
        
if (mysqli_num_rows($result) == 0) {
    echo '<div class="status">
        <img src="pngtree-red-cross-paint-clipart-transparent-background-vector-png-image_7110618.png" alt="" class="imag"><span>User not found</span></div>';
}else{
    $namee=$row["pass"];
    if($namee==$usepass){
        echo '<div><span style="color: green;">Login successfull</span></div>';
    }
    else
    {
        echo '<div style="color: red; text-align: center;"><img 
            <span>Password is incorrect</span></div>';
    
        }
    }
}
else{
    echo '<div style="color: red; text-align: center;"><img 
    <span>Please fill all the details</span></div>';
}
}?>
            <input type="text" placeholder="Enter Your Mobile" name="mobile">
            <input type="password" placeholder="Enter Password" name="password">
            <button type="submit">Sign In
            </button>


        </form>
        <div class="regstatus"><span>don't Have an Account?</span> <a href="registration.php">Sign_up</a> now</div>
    </div>

</body>

</html>