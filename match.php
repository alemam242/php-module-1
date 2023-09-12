<?php
$color  = "Green";
$result = match ($color) {
    "Red" => "Primary Color",
    "Blue" => "Primary Color",
    "Yellow" => "Primary Color",
    default => "Unknown Color"
};

echo $result;
