<?php 
//echo "Hello FTFL!";

//Syntax Exercise

//variables

$a = 1;

//block
//nested
{
	{
	
	}
}

//Data Type | Type Casting

$aNumber = 1234;
//echo gettype($aNumber);
//echo settype($aNumber, 'String');
//echo gettype($aNumber);

//$_aString = abcd; 
$_aString = 'abcd$aNumber'; 
$_anotherString = "abcd$aNumber"; 
//echo gettype($_aString);
//echo gettype($_anotherString);

//echo $_aString;
//echo "<br />";
//echo $_anotherString;

$aFloatedNumber = 12.123;
//echo gettype($aFloatedNumber);

$aBool = true;
$anotehrBool = false;
///echo gettype($aBool);
//echo gettype($anotehrBool);

//echo $aBool;
//echo "<br />";
//echo $anotehrBool;

$a = 2*3+5;
echo nl2br($a."\n".$a);

















