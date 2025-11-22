<?php

$CountryArray = [
  "Bangladesh" => "Dhaka",
  "India" => "Delhi",
  "United States" => "Washington, D.C.",
  "China" => "Beijing",
  "Russia" => "Moscow",
];

asort($CountryArray);

echo "<pre>";
print_r($CountryArray);
