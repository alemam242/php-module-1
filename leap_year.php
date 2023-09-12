<?php

$years = [1700, 1800, 1900, 2100, 2200, 2300, 2500, 2600, 1600, 2000, 2400];

foreach ($years as $year) {
    if ($year % 4 == 0 && $year % 100 == 0 && $year % 400 == 0) {
        echo "{$year} is a leap year\n";
    } else {
        echo "{$year} is not a leap year\n";
    }
}
