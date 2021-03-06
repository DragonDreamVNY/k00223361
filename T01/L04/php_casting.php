<html>
<head>
  <title>PHP_casting</title>
</head>
<body>

<h1>Type Casting</h1>

<?php
  $abc = 10; 		// $abc is an integer
  $def = 3.1416;   //$def is a float
  $ghi = (integer) $def;	//cast the float as integer
  $xyz = (boolean) $abc;   // $xyz is a boolean cast of $abc

  echo "\$abc is integer:  $abc  </br>";
  echo "\$def is float  :$def  </br>";
  echo "\$ghi is integer cast of \$def :$ghi  </br>";
  echo "\$xyz is boolean cast of \$abc  :$xyz  </br>";

?>


<h1>Automatic Type Conversion</h1>
<?php
  $var1 = "0";  // $var1 is string (ASCII 48)
  echo '$var1 is a STRING: '.$var1. '<br>';
  $var1 += 2;   // $var1 is now an integer (2)
  echo '$var1 is now an INTEGER: '.$var1.'<br>';
  $var1 = $var1 + 1.3;  // $var1 is now a float (3.3)
  echo '$var1 is now a FLOAT: '.$var1.'<br>';
  $var1 = 0+ "99 Welcome to DDA"; // $var1 is integer (99)
  echo '$var1 is now an INTEGER: '.$var1.'<br>';
  $var1 = "99 Welcome to DDA";     // $var1 is String
  echo '$var1 is now a STRING: '.$var1.'<br>';
?>


</body>
</html>
