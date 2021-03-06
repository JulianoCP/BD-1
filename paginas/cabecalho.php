<?php  include 'conexao.php';?>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>FilmesHD</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" integrity="sha384-3AB7yXWz4OeoZcPbieVW64vVXEwADiYyAEhwilzWsLw+9FgqpyjjStpPnpBO8o8S" crossorigin="anonymous">
  <link rel="stylesheet" href="lib\bootstrap-4.0\css\bootstrap.css">
  <link rel="stylesheet" href="css\style.css">

</head>
<body class="d-flex flex-column">
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-black fixed-top justify-content-between">
      <a class="navbar-brand" href="index.php" style="color:#e9ecef;"><div style="font-size:1em; color:#e9ecef">Filmes<span style="color: red "><b>HD</b></span>

      </div></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
        <div class="dropdown">
          <button class="btn btn-outline-light dropdown-toggle btn-sm" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Categorias
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <?php
            $sql = "SELECT * FROM filmeshd.categoria";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
              while($row = $result->fetch_assoc()) {
                echo "
                <a href='?cat=". $row["idcategoria"] ."' class='dropdown-item' value=". $row["idcategoria"] .">". $row["NomeCat"] ."</a>
                ";
              }
            } else {
              echo "0 resultados";
            }
            ?>
          </div>
        </div>
      </div>
        <ul class="navbar-nav">
          <li class="nav-item active ">
            <a class="nav-link" href="?lancamento=1"><button type="button" class="btn btn-outline-light btn-sm">Lançamentos</button><span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active ">
        </ul>
      </div>
    </nav>
  </header>
