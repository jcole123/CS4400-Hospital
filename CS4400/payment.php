<?php
date_default_timezone_set('America/New_York');
include_once 'header.php';

$error = '';
echo <<<_END
<style>
h2 {text-align:center;}
</style>
<h2>Payment Information</h2>
<form method='post' action='payment.php'>$error
<span class='nowrap'>Cardholder's Name: </span>
<input type='text' name='cname' value='' /><br/>
<span class'nowrap'>Card Number: </span>
<input type='text' name='cnumber' value='' /><br/>
<span class='nowrap'>CVV:</span>
<input type='text' name='cvv' value='' maxlength='3' size='1' /><br/>
Date of Expiration: <input type='date' name='date' value='' /><br/>   
_END;
?>

<input type='submit' value='Order' />
</form></div><br /></body></html>