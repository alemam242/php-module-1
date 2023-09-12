<?php

$fname   = "Al";
$lname   = "Suvo";
$midname = "Emam";

printf('My name is %2$s %1$s %3$s', $fname, $midname, $lname); // output: Emam Al Suvo
printf("\n");

$n = 512;
$m = 24;
printf("%04d\n%04d\n", $n, $m); // output: 0512 0024

$n = 512.34564;
$m = 24.76654;
printf("%08.2f\n%08.2f\n", $n, $m); // output: 00512.35 00024.77

if (true) {
    echo "True";
}
