<?php session_start();
if(!isset($_SESSION['a'])) {
$_SESSION['a']=0;
}
if(!isset($_SESSION['b'])) {
$_SESSION['b']=0;
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Incrementa</title>
</head>
<body>
<?php 
switch($_POST['accion']) {
case "incA":
$_SESSION['a'] += 28;
break;
case "decA":
$_SESSION['a'] -= 28;
break;
case "incB":
$_SESSION['b'] += 15;
break;
case "decB":
$_SESSION['b'] -= 30;
break;
case "cierra":
session_destroy();
header("refresh: 0;");
// refresca la página
}
?>
<h1>
a = <?php echo$_SESSION['a']?><br>
b =<?php echo$_SESSION['b'];?>
</h1>
<form action="#" method="POST">
<select name="accion">
<option value="incA">Incrementa a</option>
<option value="decA">Decrementa a</option>
<option value="incB">Incrementa b</option>
<option value="decB">Decrementa b</option>
<option value="cierra">Cierra sesión</option>
</select>
<input type="submit" value="OK">
</form>
</body>
</html>

