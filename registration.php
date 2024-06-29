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
        <h1>Sign Up</h1>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            require "partials\_db_connect.php";
            $usern = $_POST['username'];
            $email = $_POST['email'];
            $mobile = $_POST['mobile'];
            $state = $_POST['State'];
            $city = $_POST['city'];
            $pass = $_POST['password'];
            
            $sql = "SELECT phone from userdata where phone='$mobile'";
            $result = mysqli_query($conn,$sql);
                      
            
        
        if (mysqli_num_rows($result) == 0) {
    
            if($usern!=""&&$pass!=""&&$email!=""&&$state!=""&&$mobile!=""&&$city!=""){
            $sql = "INSERT into userdata VALUES ('$usern','$email','$mobile','$state','$city','$pass')";
            mysqli_query($conn,$sql);
            echo '<div class="status"><span style="color: green;">Account created successfully !</span></div>';
        }
        else{
            echo '<div class="status">Please fill all the fields!</span></div>';
        }
        }
        else{
            echo '<div style="color: red; text-align: center;" <span > Account already created with this phone number !</span></div>';
            }
        }
        
        ?>
        <form action="" method="post" class="regform">
            <input type="text" placeholder="Enter Your Name" name="username">
            <input type="text" placeholder="Enter Your Email" name="email">
            <input type="text" placeholder="Enter Your Mobile" name="mobile">
            <input type="text" placeholder="Enter Your State" name="State">
            <input type="text" placeholder="Enter Your City" name="city">
            <input type="password" placeholder="Enter Password" name="password">
            <input type="password" placeholder="Confirm Password">
            <button type="submit">Sign Up</button>


        </form>
        <div class="regstatus"><span>Already have an Account?</span> <a href="signin.php">Sign_In</a> now</div>
    </div>
    </div>

</body>

</html>