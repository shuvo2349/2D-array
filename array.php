<?php
//Array

$cars = array('toyota','sedan','mercidize');
//echo gettype($cars);

$cars[] = 'Premeo';

$cars[8] = 'Suzuki';

$cars[] = 'Corola';

$cars['daisy'] = 'Ford';

$cars[] = 'Ferreri';

echo "<pre>";
print_r( $cars );
echo "</pre>";


//associative array

$fruits = array(""=>'test','a'=>'apple','b'=>'banana');

//$fruits[""] = 'this is last value';
echo $fruits[""];
echo "<pre>";
print_r( $fruits );
echo "</pre>";

//echo $fruits['a'];

$arr2D = array($cars,$fruits);
echo "<pre>";
print_r( $arr2D );
echo "</pre>";

echo $arr2D[1]['b'];