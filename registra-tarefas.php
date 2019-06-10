<?php include("cabeçalho.php")?>
<?php include("conecta.php")?>
<?php include("function-banco.php")?>
<?php  
    
    $usuario = addslashes(trim($_POST['usuario']));
    $descricao = addslashes(trim($_POST['descricao']));
    $data = addslashes(trim($_POST['data']));
    
    $rs = InsereTarefa($conexao, $usuario, $descricao, $data);
        if(!$rs){?>
            echo "Não foi possivel realizar seu cadastro!";
        <?php }else { ?> 
            <p class="text-success">Tarefa Registrada com Sucesso!</p>
    <?php
        }
                                      
?>

<?php include("rodape.php")?>



