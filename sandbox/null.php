<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>Nulls</title>
	</head>
	<body>

		<?php
			$var1 = null;
			$var2 = "";
		?>
		var1 null? <?php echo is_null($var1); ?><br />
		var2 null? <?php echo is_null($var2); ?><br />
		var3 null? <?php echo is_null($var3); // returns true for this, but also throws a warning ?><br />
		<br />
		var1 is set? <?php echo isset($var1); ?><br />
		var2 is set? <?php echo isset($var2); ?><br />
		var3 is set? <?php echo isset($var3); ?><br />
		<br />
		
		<?php 
		// all of these register as empty: "", null, 0, 0.0, "0", false, array()
		// be very careful with it since zero counts
		$var3 = "0"; 
		?>
		var1 empty? <?php echo empty($var1); ?><br />
		var2 empty? <?php echo empty($var2); ?><br />
		var3 empty? <?php echo empty($var3); ?><br />
		
	</body>
</html>
