<?php
//We add the error info here because the below is arranged as a self-processing form
$myErrors = array();
$somethingsMissing = array();
$expectedInfo = array();
$requiredInfo = array();

//The below checks to see if the "Submit Information" button named "send" has been clicked.
if (isset($_POST['send'])){
	// We want to email the contents of the "Client Information" form to my email address
	$to = 'gratiafide@yahoo.com';
	$subject = 'Feedback from Client Information form';
	$expectedInfo = array('name', 'email', 'address');
	$requiredInfo = array('name', 'email', 'address');
	require '../../../../../xampp/htdocs/introducingphp/includes/form_data_checker.php';
}?>

<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Client Contact Information</title>
<link href="../../../../../xampp/htdocs/introducingphp/textColors.css" rel="stylesheet" type="text/css">
</head>

<body>
<h1>Client Information</h1>
<?php if ($myErrors || $somethingsMissing) { ?>
<p class="warning"> Please fix the item(s) indicated. </p>
<?php } ?>
<!-- The method="get" is used by default, however, "post" is more secure because it hides the information in the URL ("get" puts the info in the URL).  Only use the unsecure "get" for SEARCH forms-->
<!-- The "action=" setting determines where the data obtained by the form is sent.  Sometimes it's emailed, sometimes it's stored in a database.  In this case, we've turned it into a "self-processing form", and the plan would be to add the script that processes the data in a conditional statement BEFORE the form.  This way, the form can refresh if there are any errors submitted-->
<form name="contact" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	<p>
		<label for="name"> <p1>Name:</p1>
        <?php if ($somethingsMissing && in_array('name', $somethingsMissing)) { ?>
        <span class="warning"> (Please enter your name) </span>
        <?php } ?>
        </label>
        <input type="text" name="name" id="name">
	</p>
    <p>
    	<label for"email"> <p1>Email:</p1>
                <?php if ($somethingsMissing && in_array('email', $somethingsMissing)) { ?>
        <span class="warning"> (Please enter your email) </span>
                <?php } ?>
        </label>
        <input type="email" name="email" id="email">
    <p>
    	<label for="address"> <p1>Address:</p1>
                <?php if ($somethingsMissing && in_array('address', $somethingsMissing)) { ?>
        <span class="warning"> (Please enter your address) </span>
                <?php } ?>
        </label>
        <input type="text" name="address" id="address">
    </p>
    <p>
    	<input type="submit" name="send" id="send" value="Submit Information">
    </p>
<form>
<pre>
<?php

//The following just prints out any data obtained in our form using "GET" or "POST".  If nothing is in the GET or POST array (which automatically is filled with any entered values), then it is "NULL" and it skips the relevant if/else block of code.
if($_GET){
	echo 'Contents of the $_GET array: <br>';
	print_r($_GET);
} elseif ($_POST) {
	echo 'Contents of the $_POST array: <br>';
	print_r($_POST);
}
?>
</pre>
</body>
</html>