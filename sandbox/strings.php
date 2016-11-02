<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>Strings</title>
	</head>
	<body>
	<?php
	
		echo "Hello World!<br />";
		echo 'Hello World!<br />';
		
		$greeting = "Hello";
		$target = "World";
		$phrase = $greeting . " " . $target;
		echo $phrase;

		?>
	<br />
	<?php
	
		echo "$phrase Again<br />"; // sees the dollar sign and knows that that is a variable and replaces the string value
		echo '$phrase Again<br />'; // doesn't work with single quotes.  takes it all as a literal string
		echo "{$phrase}Again<br />"; // if there is no space between the variable and the next text, curly braces tells php what is a variable
	
	?>
	</body>
</html>
