<?php
function conversion2($n1)
{
    $n2 = ($n1 - 32) * 5 / 9;
    echo $n2. " ºC";
}
conversion2(32); echo "<br>";
?>