<?php
$x = 5; //global scope

function myTest() {
    //using x inside this function will generates error
    echo "<p>Variable x inside function is: $x</p>";
}
myTest();

echo "<p>Variable x outside function is: $x</p>";

/*function myTest() {
    $y = 6; //local scope
    echo "<p>Variable y inside function is: $y</p>";
}
myTest();
//using y outside the function will generate error
echo "<p>Variable y outside function is: $y</p>";*/
?>