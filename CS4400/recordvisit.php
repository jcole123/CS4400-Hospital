
<?php
date_default_timezone_set('America/New_York');
include_once 'header.php';
echo <<<_END
<style>
h2 {text-align:center;}
</style>
<h2>Record a Visit</h2>
<form method='post' action='recordvisit.php'>
<span class='fieldname'>Date of Visit</span>
<input type='date' maxlength='16' name='dov' value=''
  /><br />
<span class='fieldname'>Patient Name</span>
<input type='text' maxlength='16' name='patname'
    value='' /><br />        
<span class='fieldname'>Blood Pressure:</span>
<span class='fieldname'>Systolic</span>
<input type='text' maxlength='3' size='1' name='systolic'
    value='' /><br />
<span class='fieldname'>Diastolic</span>
<input type='text' maxlength='3' size='1' name='diastolic'
    value='' /><br /><br />
<span class='fieldname'>Diagnosis</span>
<textarea rows='4' cols='50' maxlength='160' ' name='diagnosis'
    value='' />
</textarea><br />
<hr>
<h2>Prescribe Medication</h2>
<span class='fieldname'>Drug Name</span>
<input type='text' maxlength='16' name='drug'
    value='' /><br /> 
<span class='fieldname'>Dosage</span>
<select>
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
    value='' /> months
<input type='text' maxlength='3' size='1' name='days'
    value='' /> days <br/>
<span class='fieldname'>Notes</span>
<textarea rows='4' cols='50' maxlength='160' ' name='notes'
    value='' /></textarea><br/>
_END;

        

?>

<input type='submit' value='Submit' />
</form></div><br /></body></html>
