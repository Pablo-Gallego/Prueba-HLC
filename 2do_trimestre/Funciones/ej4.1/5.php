<?php
function dia_semana($dia, $mes, $año) 
{
    return date("l", mktime($dia, $mes, $año));
}
echo dia_semana(9,11,2023);
?>