<?php include("cabe.php");
include '../conexao.php';?>

<main>
  <div id="main">
    <div class="container" style="margin-top:100px">
      <div class="add row justify-content-center">
        <form class="form-inline" class="borda" action="addresolucao.php" method="get">
          <div class="form-group mx-sm-3 mb-2">
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Resolucao...">
          </div>
          <button type="submit" class="btn btn-outline-light mb-2">ADICIONAR</button>
        </form>
      </div>
      <div class="add row justify-content-center">
        <div class="text-center col-md-6">
          <table class="table text-center table-sm table-bordered">
            <thead>
              <tr>
                <th scope="col" style="color:red">ID</th>
                <th scope="col" style="color:red">RESOLUÇÕES</th>
                <th scope="col" style="color:red">EDITAR</th>
              </tr>
            </thead>
            <tbody>

              <?php
              $sql = "select Nome,idresolucao from resolucao";
              $result = $conn->query($sql);
              if ($result->num_rows > 0) {

                while($row = $result->fetch_assoc()) {
                  echo "<tr>
                  <th scope='row'>".$row["idresolucao"]."</th>
                  <td>".$row["Nome"]."</td>
                  <td class='text-center'>
                  <button id='edi' type='button' name='button' onclick='edi(this.id, ".$row["idresolucao"].")'><i class='fas fa-edit'></i></button>
                  <button id='delete' type='submit' name='button' onclick='acao(this.id, ".$row["idresolucao"].")'><i class='fas fa-trash-alt'></i></button>
                  </div></td>
                  </tr>";

                }
              } else {
                echo "0 results";
              }
              ?>

            </tbody>
          </table>
        </div>
      </div>
    </div>
    <script>
    function acao(tipo, id) {
      if (tipo=='delete') {
        url="/action/delereso.php?id=" + id;
        window.location.href = url;
      }
    }
    </script>
    <script>
    function edi(tipo, id) {
      if (tipo=='edi') {
        url="/action/edireso.php?id=" + id;
        window.location.href = url;
      }
    }
    </script>
    <?php include("rodape.php") ?>
