<?php

/**
 * * Best way to base convert is
 * ? base_convert(value, from_base, to_base)
 */


echo base_convert("1011", 2, 10) . PHP_EOL; // binary to decimal
echo base_convert("1A22C", 16, 10) . PHP_EOL; // hex to decimal
echo base_convert("1A22C", 16, 2) . PHP_EOL; // hex to binary
echo base_convert("588", 2, 8) . PHP_EOL; // binary to octal
echo base_convert("4785", 8, 10) . PHP_EOL; // octal to decimal
