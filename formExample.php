<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
      integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>


<h2>Form Examples</h2>
<div class="form-group">



<form action="menu.php" class="" method="post">
    <select class="form-control" name="country">
        <option value="1">Sweden</option>
        <option value="2">Finland</option>
        <option value="3">Norway</option>
    </select>
    <input class="btn btn-primary" type="submit" name="btnSend" value="Send">
</form>
</div>

<?php>
$chosen=$_POST['country'];
echo 'You have chosen: '.$chosen;
?>