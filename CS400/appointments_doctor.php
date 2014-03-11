<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
<?php
date_default_timezone_set('America/New_York');
include_once 'header.php';
if (!$loggedin) die();
include_once 'header.php';
        
        if (isset($_POST['appointment_date'])){
            echo $_POST['appointment_date'];
            echo $_POST['app_month'];
        }
        //else echo $_POST['app_month'];
     
            
            
echo <<<_END
        <form method='post' action='appointments_doctor.php' enctype='multipart/form-data' id="carform">
        View appointment details in Date:
        <input name="appointment_date" min="2012-01-01" max="2018-01-01" type="date"><br/>
        View Number of Appointments in Month:
        <input name="app_month" min="2012-01-01" max="2018-01-01" type="month">
_END;

        
        ?>
<input type='submit' value='Submit' />
</form>
    </body>
</html>
