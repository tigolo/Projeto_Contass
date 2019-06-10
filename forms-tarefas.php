<?php include("cabeçalho.php")?>
    <h1>Registro de Tarefas</h1>
    
    <form method="POST" action="registra-tarefas.php">
       <table class="table">
       <tr>
           <td>Usuario:</td>
           <td><input class="form-control" type="text" name="usuario"><br></td>
       </tr>
       <tr>
           <td>Descrição:</td>
           <td><textarea class="form-control" type="text" name="descricao"></textarea><br></td>
       </tr>
       <tr>
           <td>Data:</td>
           <td><input class="form-control" type="text" name="data"><br></td>
       </tr>
       <tr>
           <td><input type="submit" class="btn btn-primary" onclick="cadastra()" name="Enviar"></td>
       </tr>
        </table>
    </form>
 
<?php include("rodape.php")?>
