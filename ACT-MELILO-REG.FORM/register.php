<?php

	$fname 		= $_POST['fname'] ; 
	$mname 		= $_POST['mname'];
	$lname 		= $_POST['lname'];
	$gender 	= $_POST['gender'];

	$month 		= $_POST['month'];
	$day 		= $_POST['day'];
	$year 		= $_POST['year'];

	$program 	= $_POST['program'];
	$sType 		= $_POST['stype'];
	$address 	= $_POST['address'];

?>

 Firstname: <strong><?php echo @$fname; ?></strong><br />
 Middlename:<strong><?php echo @$mname; ?></strong><br />
 Lastname: <strong>	<?php echo @$lname; ?></strong><br />
 Gender: <strong><?php echo @$gender; ?></strong><br />
 Birthday: <strong>	<?php echo @$month ." ". @$day ." ". @$year; ?></strong><br />
 Program: <strong><?php echo @$program; ?></strong><br />
 Student Type: <strong>	<?php echo @$sType; ?></strong><br />
 Address: <strong><?php echo @$address; ?></strong>
