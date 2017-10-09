<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="style.css">
<title>Add Dispositivo</title>
</head>

<body>
<div id="mestre">
<?php include ("include/nav.php");?>
<div id="bemvindo">
	Bem Vindo 
</div>
  <div id="form">
   	<h1>Dispositivos </h1>
	<form name="addc_dispositivo" action="" method="POST" id="addc_usuario" >
    <label for="nome">Nome:</label><br>
    <input type="text" id="nome" title="nome" name="nome" value=""><br>
    <label for="usuario">Modelo:</label><br>
    <input type="text" id="modelo" title="modelo" name="modelo" value=""><br> 
    <input type="submit" id="salvar" title="salvar" value="Salvar">
    <input type="hidden" name="MM_insert" value="addc_usuario">
    </form>
  </div>
</div>
</body>
</html>