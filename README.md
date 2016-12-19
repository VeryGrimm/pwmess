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
