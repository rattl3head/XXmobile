<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Excluir Dispositivo</title>
</head>

<body>
<div id="mestre">
<?php include ("include/nav.php");?>
<div id="bemvindo">
	Bem Vindo 
</div>
  <div id="sair">
    	Deseja realmente deletar <?php echo $row_sel_usuarios['nome']; ?>? <br><br><br>
        <a href="usuarios_del2.php?cod=<?php echo $row_sel_usuarios['cod']; ?>" class="sim_nao">Sim</a><a href="usuarios.php" class="sim_nao">Não</a> </div>
</div>
</div>
</body>
</html>]
