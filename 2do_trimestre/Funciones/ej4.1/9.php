<?php
function cuenta($cuenta,$num1,$num2) 
{
    if ($cuenta == "suma") 
    {
        return $num1 + $num2;
    } else if ($cuenta == "resta") 
    {
        return $num1-$num2;
    } else if ($cuenta == "multiplicacion") 
    {
        return $num1 * $num2;
    }
    else if ($cuenta == "division" && $num2 != 0) 
    {
        return $num1 / $num2;
    }
    else 
    {
        echo "no se puede realizar la cuenta";
    }
}
echo "Al sumar juntamos varios valores en uno solo. EJ: 6+2 " . cuenta("suma",6,2);echo "<br>";
echo "Para restar dos números enteros se suma al minuendo el opuesto 
del sustraendo. EJ: 6-2 "  . cuenta("resta",6,2);echo "<br>";
echo "La multiplicación es la operación matemática que consiste en hallar el resultado de sumar 
un número tantas veces como indique otro. EJ: 6*2 "  . cuenta("multiplicacion",6,2);echo "<br>";
echo "La división consiste en descomponer un número, al que denominaremos dividendo, en tantas 
partes como así lo indique otro número, al que denominaremos divisor. EJ: 6/2 "  . cuenta("division",6,2);
?>