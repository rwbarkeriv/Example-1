<h2>Get Method</h2>
<form action="getExample.php" method="GET">
  <label for="fname">Firstname</label>
  <input type="text" id="fname" name="fname" value="">
  <br>
  <label for="lname">Lastname</label>
  <input type="text" id="lname" name="lname" value="">
  <br>
  <input type="submit" name="sendBtn" value="Send">
</form>

<?php
$btn=$_GET['sendBtn'];
if (isset($btn)) {
  $fn=$_GET['fname'];
  $ln=$_GET['lname'];
  echo 'Hello '.$fn.' '.$ln;
}
?>
