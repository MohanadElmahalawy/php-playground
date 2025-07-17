<?php
//1(echo vs print)
// In print we can only print one string at a time, so we cannot use commas like in echo.
echo "Hello World!" . "\n" . "ay haga" . "\n" . "ayhaga2";
print "Hello World!" . "\n" . "ay haga" . "\n" . "ayhaga2";
echo "Hello, World!", "ayhaag","\n";

// 2(primitive variable)
$ayhaga = "Hello, World!";
$ayhaga=42;
$ayhaga = 3.14;
$ayhaga = null;
$ayhaga = true;
echo $ayhaga . "\n";

// (Non-primitive)
$ayhaga_arr = array("honda", "toyota", "mazda");
echo "array: " . $ayhaga_arr[1] . "\n";
?>
