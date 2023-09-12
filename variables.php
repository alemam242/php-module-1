<?php
define("PI", 3.1416);


echo "The value of PI is: {PI}\n"; // Can't print const value like this

/**
 * * Here are some examples of printing const value
 */
echo "The value of PI is: " . PI . "\n";
echo "The value of PI is: " . constant("PI") . "\n";



echo "The value of PI is: constant('PI')\n"; // Can't print like this But

// Using this trick
$const = "constant";
echo "The value of PI is: {$const('PI')}\n"; // Now we can print the constant