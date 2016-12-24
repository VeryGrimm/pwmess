"# pwmess" 

-.php 's are like .asp 's.  they process the php scripts areas and then output html to the browser
-php open and clase tags are <?php ?>

-echo outputs whatever the variable is as html.  ex: <?php echo "Hello World!"; ?><br />
-print_r() will pretty print an array or json (or maybe even html?)

-single line comment operators are // or #
-multi line comment operators are /* */

-variables have a dollar sign in front of them.  ex: $var1
-variables are not accessible outside of their scope unless the global keyword is used.  ex: global $bar;

-each php line has to have a semicolon after it ex: $var1 = 10;

-strings are specified with "" or ''
-the string concatenation operator is .  ex: $phrase = $greeting . " " . $target;
-a variable can be embedded into a string.  ex: echo "{$phrase}Again<br />";
-a quick concatenation operator is .= ex: $third .= $second;
-see string_functions.php for various string manipulation functions

-integers are declared like this: $var1 = 3;
-integer manipulation functions are very c-like.  see integers.php for examples.

-floats are declared like this: $float = 3.14;
-php will type convert on the fly if you're doing something like adding a float and an integer
-see floats.php for float manipulation functions

-arrays can be mixed types and can be declared like this: $mixed = array(6, "fox", "dog", array("x", "y", "z")); or $array = [1,2,3];

-associative arrays are ways to make key/value pairs and are declared like this: $assoc = array("first_name" => "Kevin", "last_name" => "Skoglund");
-and gotten like this: echo $assoc["first_name"] . " " . $assoc["last_name"];

-see array_functions.php for examples of array functions

-booleans are used how you would expect, and declared like this: $result1 = true;

-if/then conditions use c/java syntax.  else and elseif also.

-nulls are declared like this: $var1 = null;
-see null.php for example of functions for dealling with nulls

-variable types can be implicitly set like this: settype($test1, "string");

-constants are declared like this: define("MAX_WIDTH", 980);
-constants can't be changed in any way after being defined

-operators all seem to be like c/java

-switch statements seem to have the same syntax as c/java

-while loops have c/java like syntax

-for loops have c/java like syntax

-foreach loops use the as operator.  for example, if $ages is an array, each element is assigned to $age : foreach($ages as $age) { }
-foreach loops can also use the => operator so that you can access both the key and the value in a associative array.  ex: foreach($person as $key => $value) { }

-continue works like it does in c/java, except that it's possible to give it an argument like continue(2) which will jump up to the loop outside of the current one and continue from there

-break works similarly to continue, in that while it works like break does in c/java, an argument can be given to say which loop to break.  ex: break(2)

-there are array pointer functions that are used to move through an array like a recordset.  current($ary) returns the current position.  but after next($ary), current($ary) will return the next one.
-array pointer functions are next, prev, reset, end and current.

-functions are declared like javascript, with arguments not typed.  ex: function say_hello_to($word) { }
-returning values from functions works like c/java.  ex: return $greeting . " " . $target . $punct . "<br />";
-returning multiple values has to be done with arrays.  there's a function called list that can unpack an array into individual variables.  ex: list($add_result, $subt_result) = add_subt(20,7);
-default values for function arguments can be specified.  ex: function paint($room="office",$color="red")
-if an argument is omitted, then the default will be used (null doesn't count as omission)

-there doesn't seem to be a way to step through your code in php, but there are some helpful functions for debugging: var_dump(), get_defined_vars(), debug_backtrace()
-var_dump() outputs variable type and value
-get_defined_vars() outputs an array of defined variables
-debug_backtrace() shows backtrace of functions that have been called
-there are some 3rd party helpers for debugging: Xdebug, DBG, and FirePHP

-$_GET is what is called a "super global variable", and it is set up by php.  You can use it to retrieve get parameters.  ex: $id = $_GET['id'];

-$_POST is the same thing as $_GET, but for form post parameters that were sent.

-$_COOKIE is the same thing as $_GET, but for cookie parameters that were set.
-setcookie($name, $value, $expire); is the function used to set the cookie values.  expire is seconds and can be set like this: $expire = time() + (60*60*24*7); // add seconds
-cookie values can be unset by setting the value to null (and as an additional best practice, set the expire to a date in the past.  ex: setcookie($name, null, time() - 3600);
-cookies can only store 4k characters.  sessions are generally better since they aren't limited in size.  when a session is created, the id is stored in a cookie.

-$_SESSION is the same thing as $_GET, but for session parameters that were set.
-sessions are not limited in size like cookies
-session_start() gets the session rolling, and should be placed at the start of the page.  the id will automatically be stored in a cookie.
-session values are just set like this: $_SESSION["first_name"] = "Kevin";

-isset() can be used to check to make sure the get, post and cookie parameters were sent so that you don't error out when trying to get a nonexistent one.

-A urlencode() function is used to encode get values
-rawurlencode() does the same thing as urlencode(), but makes spaces %20 instead of +.  This is generally used for the path portion of the url (before any arguments are passed)

-htmlspecialchars() can be used to encode html with reserved characters output via php display correctly
-htmlentities() will convert all symbols to escape characters that can be

-include() is the function used to include other php files. ex: <?php include("included_functions.php"); ?>
-require() is like include() but will throw an error if the file isn't there.
-include_once() is like include(), but will ignore it we attempt to include the same file that we did earlier
-require_once() is like include_once() but will throw an error if the file doesn't exist

-header() can be used to modify html headers.  this must be done first in the file.  ex: header("HTTP 1.1/ 404 Not Found");
-header() can also be used to redirect a page.  be sure to use the exit command afterwards so that nothing else is output.  ex: header("Location: " . $new_location); exit;
-ob_start() and ob_end_flush() are functions for output buffering.  Anything between those will be buffered.  With this, it is possible to edit headers after something else came before it

-the operator === Returns true if $x is equal to $y, and they are of the same type
-the operator !== is the not equal version of ===

-the MySQL console can be accessed via the wampserver icon in the system tray.
-useful commands to know are:
-SHOW DATABASES;
-CREATE DATABASE db_name;
-USE db_name;
-DROP DATABASE db_name;
-GRANT ALL PRIVILEGES ON db_name.* TO 'username'@'localhost' IDENTIFIED BY 'password';
-SHOW GRANTS FOR 'username'@'localhost';
-SOURCE path_file.sql; // this runs the .sql file.  don't include this comment.

-there are three database api's in php.  mysql, mysqli and pho.  pho works on multipe databases
-these examples are for mysqli
-connect to the database like this: $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
-mysqli_connect_errno() will return a number if a connection error happened
-mysqli_connect_error() will return the error message
-die() is a function that will stop all php from processing.  ex: die("Database connection failed: " . mysqli_connect_error() . " (" . mysqli_connect_errno() . ")" );
-the database connection should be closed like this: mysqli_close($connection);
-run a query against the database like this: $result = mysqli_query($connection, $query);
-test that it ran correctly like this: if (!$result) { die("Database query failed."); }
-the resultset can be iterated through. this returns an integer indexed array for the row values. ex: while($row = mysqli_fetch_row($result)) { }
-if you use mysqli_fetch_assoc($result)), the indexes will be the column names instead.
-a dirty way to display the data returned is: var_dump($row);
-release the resultset like this: mysqli_free_result($result);
-the number of affected rows can be returned like this: if ($result && mysqli_affected_rows($connection) == 1) { }
-remember that php will replace variable tokens in a string with this syntax: $query .= "menu_name = '{$menu_name}', ";



