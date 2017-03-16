<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
		  integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
			integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
			crossorigin="anonymous"></script>


	<script type="text/javascript" src="my.js">
		
	</script>
</head>
<body>
<div id='header'>
	<h1>First PHP Example</h1>
</div>

<div id='menu'>
	<button type='button' onclick="loadPage('')" class="btn btn-default">Info</button>
	<button type='button' onclick="loadPage('client.html')" class="btn btn-info">Client Side</button>
	<button type='button' onclick="loadPage('server.php')" class="btn btn-warning">Server Side</button>
	<button type='button' onclick="loadPage('array.php')" class="btn btn-success">Array</button>
	<button type='button' onclick="loadPage('postExample.php')" class="btn btn-danger">Post</button>
	<button type='button' onclick="loadPage('getExample.php')" class="btn btn-primary">Get</button>
	<button type='button' onclick="loadPage('objExample.php')" class="btn btn-info">Objects</button>
	<button type='button' onclick="loadPage('formExample.php')" class="btn btn-warning">Form</button>
	<hr>
</div>

<div id='content'>
Start
</div>

<?php
	$theButton=$_POST['btnSend'];
	if (isset($theButton))
	{
		$chosen = $_POST['country'];
		echo 'You have chosen: '.$chosen;
		unset($theButton);
	}

?>
	
	<div id='footer'>
		<hr> OAMK 2017
	</div>
</div>



</body>
</html>