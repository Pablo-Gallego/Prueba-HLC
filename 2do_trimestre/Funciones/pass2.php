<?php
function contra($array, $nombre) {
    if(isset($array[$nombre])){
        return $array[$nombre];
    }else{
        return "Usuario no existe en el array";
    }
}
$contra = array("pablo" => "pablopass", "paco" => "pacopass", "manu" => "manupass", "sole" => "solepass", "dani" => "danipass");
$usuario = "pablo";
echo "La contraseña de ".$usuario." es: " . contra($contra, $usuario);
?>