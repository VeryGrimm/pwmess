"# pwmess" 

-.php 's are like .asp 's.  they process the php scripts areas and then output html to the browser
-php open and clase tags are <?php ?>

-echo outputs whatever the variable is as html.  ex: <?php echo "Hello World!"; ?><br />

-single line comment operators are // or #
-multi line comment operators are /* */

-variables have a dollar sign in front of them.  ex: $var1
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
-print_r() will pretty print an array or json (or maybe even html?)

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

