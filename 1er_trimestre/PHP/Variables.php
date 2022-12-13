<!DOCTYPE html>
<html>
<body>

<?php
$nombre = "pablo";
$otro = "manolo";
echo "yo soy $nombre!
"; 
echo "Tu eres $otro!";
?> <br>

<?php
function myTest() {
  static $x = 1;
  echo $x;
  $x++;
}

myTest();
echo "<br>";
myTest();
echo "<br>";
myTest();
?> 

</body>
</html>