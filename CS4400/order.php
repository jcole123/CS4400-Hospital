<?php
date_default_timezone_set('America/New_York');
include_once 'header.php';

$days = $months = $dosage = 0;
$doctor = $drug = $notes = $error = $date =  '';

echo <<<_END
<style>
h2 {text-align:center;}
</style>
<h2>Order Medication</h2>$error
<form method='post' action='order.php'>$error
<span class='fieldname'>Drug Name</span>
<input type='text' maxlength='16' name='drug'
    value='$drug' /><br />
<span class='fieldname'>Dosage</span>
<select value="$dosage'>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
</select> per day<br/>        
<span class='fieldname'>Duration</span>
<input type='text' maxlength='3' size='1' name='months'
    value='$months' /> months
<input type='text' maxlength='3' size='1' name='days'
    value='$days' /> days <br/>
<span class='fieldname'>Consulting Doctor</span>
<input type='text' name='doctor'
    value='$doctor' /><br/><br/>
<span class='fieldname'>Date of Visit</span>
<input type='date' maxlength='16' name='dov' value='$date'
_END;

        

?>

<input type='submit' value='Checkout' />
</form></div><br /></body></html>

