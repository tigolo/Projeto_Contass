<?php include("cabeçalho.php");?>
<?php include("function-banco.php");?>
<?php include("conecta.php");

if(array_key_exists("removido", $_GET) && $_GET['removido']==true){
?>
    <p class="alert-success">Tarefa removida com sucesso!</p>
<?php
}
?>


<table class="table table-striped table-bordered">
    <h1>Lista de Tarefas</h1>
    <?php
        $tarefas = listaTarefas($conexao);
        foreach($tarefas as $tarefa):
    ?>
    <tr>
        <td><?= $tarefa['usuario'] ?></td>
        <td><?= $tarefa['descricao'] ?></td>
        <td><?= substr($tarefa['datas'], 0, 40) ?></td>
        <td><a class="btn btn-success" href="alterar-tarefa-forms.php?id=<?=$tarefa['id']?>">Alterar</a></td>
        <td>
           <form action="remove-tarefa.php" method="POST">
               <input type="hidden" name="id" value="<?=$tarefa['id']?>">
                <button  class="btn btn-danger">Remover</button>
           </form>
        </td>
    </tr>
    <?php
        endforeach
    ?>
</table>



<?php include("rodape.php");?>