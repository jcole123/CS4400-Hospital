<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from getbootstrap.com/examples/signin/ by HTTrack Website Copier/3.x [XR&CO'2013], Wed, 02 Oct 2013 12:14:41 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="/assets/ico/favicon.png">

    <title>Register</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="examples/signin/signin.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="assets/js/html5shiv.js"></script>
    <script src="assets/js/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<div class="container">

    <form class="form-signin" name="theform" form method="post"
    <h2 class="form-signin-heading">New User Registration</h2>
    <input type="text" class="form-control" name="user" placeholder="Username"  autofocus>
    <input type="password" class="form-control" name="password" placeholder="Password">
    <input type="password" class="form-control" name="confirm" placeholder="Confirm Password">
    <div class="btn-group" id="select">
        <button type="button" class="btn btn-default" name="patient" id="patient">Patient</button>
        <button type="button" class="btn btn-default" name="doctor" id="doctor">Doctor</button>
        <button type="button" class="btn btn-default" name="admin" id="admin">Admin</button>
    </div>
    <br></br>
    <button class="btn btn-lg btn-primary btn-block" name="regbut" type="submit">Register</button>
    </form>
</div>

<?php
include_once("./Register.php");
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user = htmlentities($_POST["user"]);
    $type = htmlentities($_POST['select']);
    $val1 = htmlentities($_POST['password']);
    $val2 = htmlentities($_POST['confirm']);
    if(empty($_POST['user']))
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



<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
</body>

<!-- Mirrored from getbootstrap.com/examples/signin/ by HTTrack Website Copier/3.x [XR&CO'2013], Wed, 02 Oct 2013 12:14:41 GMT -->
</html>
