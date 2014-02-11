<head>
    <title>Register</title>
</head>
<div style="width:400px;margin:auto;"><h1>New User Registration</h1></div>
<?php
include_once("./Register.php");
?>
<form action="" method="get">
    Username:
    <input type="text" name="user" id="user">


    <br>
    Password:
    <input type="password" name="password" id="password"></>

    <br>
    Confirm Password:
    <input type="password" name="confirm" id="confirm"></>

    <br>

    <select id="select">
        <option value="patient">Patient</option>
        <option value="doctor">Doctor</option>
        <option value="admin">Administrator</option>

    </select>
    <br>
    <input type="submit" name = "regbut" value="Register"> </input>

    <?php
    if( isset($_GET['regbut'])) {
        $user = htmlentities($_GET['user']);
        $type = htmlentities($_GET['select']);
        $val1 = htmlentities($_GET['password']);
        $val2 = htmlentities($_GET['confirm']);
        if(!$user)
            echo "Enter username";
        else if(($val1 !== $val2))
            echo "Passwords must match";
        else if (strlen($val1)==0)
            echo "Must have a password";
        else {
             $newUser = new Register($user,$val1);
             $newUser->setType($type); //TODO:Fix this
             echo $newUser->getType(),"stuff",$type;
             echo "Registration Successful!";
         }
     }


    ?>
</form>



</html>