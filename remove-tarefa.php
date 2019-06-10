<?php include("cabeçalho.php")?>
<?php include("conecta.php")?>
<?php include("function-banco.php")?>

<?php

$id = $_POST['id'];

removeTarefa($conexao, $id);
header("Location: lista_tarefas.php?removido=true");
die();
?>