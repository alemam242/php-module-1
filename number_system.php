<?php
$decNum = 199;
$binNum = 0b1011; // prefix 0b
$octNum = 05417; // prefix 0
$hexNum = 0x1A2B; // prefix 0x

echo "Decimal Number: " . $decNum . PHP_EOL;
echo "Octal Number: " . $octNum . PHP_EOL;
echo "Hexadecimal Number: " . $hexNum . PHP_EOL;
echo "Binary Number: " . $binNum . PHP_EOL;

/**
 * bindec()
 * decbin()
 * dechex()
 * decoct()
 * hexdec()
 * octdec()
 */

// decimal to binary conversion
// decimal to octal conversion
// decimal to hex conversion

echo "Decimal to binary conversion: " . decbin($decNum) . PHP_EOL;
echo "Decimal to octal conversion: " . decoct($decNum) . PHP_EOL;
echo "Decimal to hex conversion: " . dechex($decNum) . PHP_EOL;

// hex to decimal conversion
// octal to decimal conversion
// binary to decimal conversion
echo "Binary to decimal conversion: " . bindec($binNum) . PHP_EOL;
echo "Binary to hex conversion: " . bin2hex($binNum) . PHP_EOL;


// 
printf("Binary representation of  decimal %d is %b\n", $decNum, $decNum);
printf("Hexadecimal representation of  decimal %d is %x\n", $decNum, $decNum);
printf("Hexadecimal representation of  decimal %d is %X\n", 6699, 6699);

printf("Decimal representation of Hex %x is %d\n", $hexNum, $hexNum);
// printf("Binary representation of  decimal %d is %b", $decNum, $decNum);
// printf("Binary representation of  decimal %d is %b", $decNum, $decNum);
