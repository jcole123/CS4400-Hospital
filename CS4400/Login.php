<?php 
date_default_timezone_set('America/New_York');
include_once 'header.php';

echo <<<_END
<script>
function checkUser(user)
{
    if (user.value == '')
    {
        O('info').innerHTML = ''
        return
    }

    params  = "user=" + user.value
    request = new ajaxRequest()
    request.open("POST", "checkuser.php", true)
    request.setRequestHeader("Content-type", "application/x-www-form-urlencoded")
    request.setRequestHeader("Content-length", params.length)
    request.setRequestHeader("Connection", "close")
    
    request.onreadystatechange = function()
    {
        if (this.readyState == 4)
            if (this.status == 200)
                if (this.responseText != null)
                    O('info').innerHTML = this.responseText
    }
    request.send(params)
}

function ajaxRequest()
{
    try { var request = new XMLHttpRequest() }
    catch(e1) {
        try { request = new ActiveXObject("Msxml2.XMLHTTP") }
        catch(e2) {
            try { request = new ActiveXObject("Microsoft.XMLHTTP") }
            catch(e3) {
                request = false
    }   }   }
    return request
}
</script>
<div class='main'><h3>Please enter your username and password to log in</h3>
_END;

$error = $user = $pass = $type = "";
if (isset($_SESSION['user'])) destroySession();

if (isset($_POST['user']))
{
    $user = sanitizeString($_POST['user']);
    $pass = sanitizeString($_POST['pass']);
    
    if ($user == "" || $pass == "")
        $error = "Not all fields were entered<br /><br />";
    else
    {
        if (mysql_num_rows(queryMysql("SELECT * FROM members
		      WHERE user='$user' AND password=$pass")))
                      die("<h4>Successfully logged in.</h4><br /><br />");
        //TODO: Login, error if info is unforrect
    }
}

echo <<<_END
<form method='post' action='Login.php'>$error
<span class='fieldname'>Username</span>
<input type='text' maxlength='16' name='user' value='$user'
    onBlur='checkUser(this)'/><span id='info'></span><br />
<span class='fieldname'>Password</span>
<input type='text' maxlength='16' name='pass'
    value='$pass' /><br />        
_END;
?>


<span class='fieldname'>&nbsp;</span>
<input type='submit' value='Log in' />
</form></div><br /></body></html>
