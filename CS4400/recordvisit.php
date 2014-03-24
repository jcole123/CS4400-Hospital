
<?php
date_default_timezone_set('America/New_York');
include_once 'header.php';

//Record visit
$date = $name = $sys = $dia = $diagnosis = $error = '';
//Prescribe meds
$drug = $notes = '';
$dosage = $months = $days = 0;

//Record visit validation
if (isset($_POST['patname'])) {
    $name = sanitizeString($_POST['patname']);       
    if($name == "")
        $error = "Must enter patient name <br/><br/>";
}
if (isset($_POST['dov'])) { 
    $date = sanitizeString($_POST['dov']);
    if($date == "")
        $error = "Must enter a date for the visit <br/><br/>";
}
//TODO: Prescribe validation

echo <<<_END
<style>
h2 {text-align:center;}
</style>
<h2>Record a Visit</h2>
<form method='post' action='recordvisit.php'>$error
<span class='fieldname'>Date of Visit</span>
<input type='date' maxlength='16' name='dov' value='$date'
  /><br />
<span class='fieldname'>Patient Name</span>
<input type='text' maxlength='16' name='patname'
    value='$name' /><br />        
<span class='fieldname'>Blood Pressure:</span>
<span class='fieldname'>Systolic</span>
<input type='text' maxlength='3' size='1' name='systolic'
    value='$sys' /><br />
<span class='fieldname'>Diastolic</span>
<input type='text' maxlength='3' size='1' name='diastolic'
    value='$dia' /><br /><br />
<span class='fieldname'>Diagnosis</span>
<textarea rows='4' cols='50' maxlength='160' ' name='diagnosis'
    value='$diagnosis' />
</textarea><br />
<hr>
<h2>Prescribe Medication</h2>
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
    value='' /> days <br/>
<span class='fieldname'>Notes</span>
<textarea rows='4' cols='50' maxlength='160' ' name='notes'
    value='$days' /></textarea><br/>
_END;

        

?>

<input type='submit' value='Submit' />
</form></div><br /></body></html>
