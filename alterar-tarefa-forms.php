<?php include("cabeçalho.php")?>
<?php include("conecta.php")?>
<?php include("function-banco.php")?>
<?php

    $id = $_GET['id'];
    $tarefa = buscaTarefa($conexao, $id);
?>
    <h1>Alterar Tarefa</h1>
    
    <form method="POST" action="altera-tarefa.php">
      <input type="hidden" name="id" value="<?=$tarefa['id']?>">
       <table class="table">
       <tr>
           <td>Usuario:</td>
           <td><input class="form-control" type="text" name="usuario" value="<?=$tarefa['usuario']?>"><br></td>
       </tr>
       <tr>
           <td>Descrição:</td>
           <td><textarea class="form-control" type="text" name="descricao"><?=$tarefa['descricao']?></textarea><br></td>
       </tr>
       <tr>
           <td>Data:</td>
           <td><input class="form-control" type="text" name="data" value="<?=$tarefa['datas']?>"><br></td>
       </tr>
       <tr>
           <td><input type="submit" class="btn btn-primary" name="Enviar"></td>
       </tr>
        </table>
    </form>
<?php include("rodape.php")?>
