<?php include("cabeçalho.php")?>
<?php include("conecta.php")?>
<?php include("function-banco.php")?>
<?php  
    
    $id = $_POST['id'];
    $usuario = $_POST['usuario'];
    $descricao = $_POST['descricao'];
    $data = $_POST['data'];
    
    
    if(alteraTarefa($conexao, $id, $usuario, $descricao, $data)){ ?>
        <p class="alert-success">Tarefa Alterada com Sucesso!</p>
    <?php } else {?>
        <p class="alert-danger">A Tarefa nao foi Alterada!</p>
    <?php
    }

                                       
?>

<?php include("rodape.php")?>
