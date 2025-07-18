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

//3(Constants)
define("consta","hellooooo");
define("cons_name", "Hello, World!");
echo "constant: ", cons_name . "\n";
echo "constant: ", consta . "\n";

//4(Arthimatic Operators)
$sandwich = 10;
$burger = 5;
$pepsi = 2;
$total = $sandwich + $burger + $pepsi;
echo "Total: ", $total . "\n";

//5(IF-ELSE STATEMENT)
$grade=70;
if ($grade>=70){
    echo "passed with A+ GRADE";
}
else if($grade>=50){
    echo "passed with B GRADE";
}
else if($grade>=40){
    echo "passed with C GRADE";
}
else{
    echo "failed";
}

?>
