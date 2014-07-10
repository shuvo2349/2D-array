<?php
//math operators
$x = 100 / (2*5);
$y = 100 % (2*5);
$z = 100 / 2 * 5;
$a = 0 / 5;
$b = 0 % 5;

echo $x."<br />";//10
echo $y."<br />";//0
echo $z."<br />";//10 | 250
echo $a."<br />";//0
echo $b."<br />";//0
echo "<br />---------------------<br />";
//Unary operators
//increment / decrement
//pre / post
$a = 2;
$a++;
echo $a;
echo "<br />---------------------<br />";

++$a;
echo $a;
echo "<br />---------------------<br />";

echo $a++."<br />";//2
echo $a;
$a = $a + 1;

echo $a--."<br />";//3
echo ++$a."<br />";//3
echo --$a."<br />";//2
echo $a."<br />";//2

$a = $a + 5;
$a += 5;

$a = $a + 1;
$a += 1;
$a++;
++$a;
echo "<br />---------------------<br />";
echo $a.PHP_EOL;
echo ++$a;
echo "<br />---------------------<br />";

$a=4;
$b=2;
echo ++$a * ($a++ + --$b);
//d: 4
//r,a,z: 25
//s,a,m,t,d,tw:30
//
echo "<br />---------------------<br />";
$a = '0';
//$a = '  ';
echo (bool) $a;

echo (int) '123';echo "<br />";
echo (int) 'dfsdfsf';echo "<br />";
echo (int) '12121dfsdfsf2323';echo "<br />";
echo (int) 'df4545sdfsf12121';echo "<br />";
//comparison

$a = '3';
$b = 5;
if( 3 == $a ){
	echo "Hello";
}
echo "<br />---------------------<br />";
if( 3 === $a ){
	echo "Hi";
}





