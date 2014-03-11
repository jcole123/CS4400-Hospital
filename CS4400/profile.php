<?php //
date_default_timezone_set('America/New_York');
include_once 'header.php';

if (!$loggedin) die();

echo "<div class='main'><h3>Your Profile</h3>";

if (isset($_POST['license_number']))
{
    $license_number = sanitizeString($_POST['license_number']);
    $license_number = preg_replace('/\s\s+/', ' ', $license_number);
    
extract($_POST); //this takes all the variables from the "form"
//compact()
//$props = [$text,
//$first_name,
//$last_name,
//$birth_date,
//$work_phone,
//$specialty,
//$room_number,
//$home_address];

    if (mysql_num_rows(queryMysql("SELECT * FROM profiles WHERE user='$user'"))){
       
        queryMysql("UPDATE profiles SET license_number='$license_number' where user='$user'"); 
        queryMysql("UPDATE profiles SET first_name ='$first_name' where user='$user'");
        queryMysql("UPDATE profiles SET last_name='$last_name' where user='$user'");
        queryMysql("UPDATE profiles SET birth_date='$birth_date' where user='$user'");
        queryMysql("UPDATE profiles SET work_phone='$work_phone' where user='$user'");
        queryMysql("UPDATE profiles SET specialty='$specialty' where user='$user'");
        queryMysql("UPDATE profiles SET room_number='$room_number' where user='$user'");
        queryMysql("UPDATE profiles SET home_address='$home_address' where user='$user'");
    } 
    
    else{
        queryMysql("INSERT INTO profiles VALUES('$user', '$license_number','$first_name','$last_name','$birth_date','$work_phone','$specialty','$room_number','$home_address')");
    }
    
}
else
{
    $result = queryMysql("SELECT * FROM profiles WHERE user='$user'");
    
    if (mysql_num_rows($result))
    {
        $row  = mysql_fetch_row($result);
        $text = stripslashes($row[1]);
    }
    else $text = "";
}

$license_number = stripslashes(preg_replace('/\s\s+/', ' ', $license_number));

showProfile($user);

echo <<<_END
<form method='post' action='profile.php' enctype='multipart/form-data'>
<h3>Please enter the required information</h3>
<span class='fieldname'>License Number</span><input type='text'
    maxlength='16' name='license_number' value='$license_number' /><br /> 
<span class='fieldname'>First Name</span><input type='text'
    maxlength='16' name='first_name' value='$first_name' /><br/>
<span class='fieldname'>Last Name</span><input type='text'
    maxlength='16' name='last_name' value='$last_name' /><br/>
<span class='fieldname'>Date of Birth</span><input type='text'
    maxlength='16' name='birth_date' value='$birth_date' /><br/>
<span class='fieldname'>Work Phone</span><input type='text'
    maxlength='16' name='work_phone' value='$work_phone' /><br/>
Specialty <select name='specialty' value = '$specialty' size='6'>
        <option value='General Physician'> General Physician</option>
        <option value='Heart Specialist'>Heart Specialist </option>
        <option value='Eye Physician'> Eye Physician</option>
        <option value='Orthopedics'>Orthopedics </option>
        <option value='Psychiatry'> Psychiatry</option>
        <option name = 'Gynecologist' value='Gynecologist'>Gynecologist </option></select><br/>
<span class='fieldname'>Room Number</span><input type='text'
    maxlength='16' name='room_number' value='$room_number' /><br/>
<span class='fieldname'>Home Address</span><input type='text'
    maxlength='16' name='home_address' value='$home_address' /><br/>
_END;

        

?>

<input type='submit' value='Save Profile' />
</form></div><br /></body></html>
