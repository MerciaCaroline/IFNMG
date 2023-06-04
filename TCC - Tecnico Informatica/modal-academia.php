
<div class="modal fade bd-example-modal-lg" id="modal-academia" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-10 offset-md-1 cadastro">
            <center>
              <h3> Academias e Suplementos: </h3> <br>
              <table class="table table-hover" frame='box'>
                <thead>
                  <tr>
                    <th scope="col">Nome da Loja</th>
                    <th scope="col">Avaliação</th>
                  </tr>
                </thead>
                <tbody>
                  
                  <?php
                  include_once "conexao.php";
                  $conexao = conecta_mysql();
                  $sql = "SELECT * FROM loja where categoria = 'Academias e Suplementos';";
                  $resultado = mysqli_query($conexao,$sql);
                  if ($resultado) {
                   $lojas = array();
                   while ($linha = mysqli_fetch_array($resultado,MYSQLI_ASSOC)) {
                     $lojas[] = $linha;
                   }
                   foreach ($lojas as $loja) {
                     $id= $loja['id_loja'];
                     print "<tr style='cursor: hand;'>";
                     print "<td scope='row'>";
                     print "<a href='loja.php?codigo=".$loja['id_loja']."'>". $loja['nome_loja']. "</a>";
                     print "</td>";
                     print "<td> Avaliação<td>";
                     print "</tr>";
                   }
                  }
                  ?>
                </tbody>
              </table>
            </center>
          </div>
      </div>
    </div>
  </div>
    </div>
  </div>
</div>
