<!DOCTYPE html>
<?php
  include("/connection.php");
?>

<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Meu Rio ❤</title>
    <link rel="icon" href="imagens/favicon.ico">
	<script type="text/javascript" src="funcao.js"></script>
    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="estilo.css" rel="stylesheet">


		  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

    <![endif]-->
  </head>
  <body>

  <nav class="nav navbar-fixed-top navbar-inverse navbar-transparente">
	  <div class="container">

		  <div class="navbar-header">
			  <!--Navbar toggle-->
			  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#barra">

				  <span class="icon-bar"></span>
				  <span class="icon-bar"></span>
				  <span class="icon-bar"></span>
			  </button>

			  <a href="index.html" class="navbar-brand">MeuRio❤</a>

		  </div>

		  <div class="collapse navbar-collapse" id="barra">
			  <ul class="nav navbar-nav navbar-right">
				  <li><a href="#">Pesquisa</a> </li>
				  <li class="divisor" role="separator"></li>
				  <li><a href="">Equipe</a> </li>
			  </ul>
		  </div>

	  </div> <!--finaliza o container-->
  </nav> <!--finaliza a barra de navegação-->

  <div class="capa diminui">
	  <div class="texto-capa">
		  <div class="sombra">
			  <h2>Pesquisas pré estabelecidas</h2>
		  </div>
	  </div>
  </div>

	<!-- Conteudo Principal-->

	<section id="recursos">
		<div class="container botom">
			<div class="row">

				<div class="col-md-4">
					<p class="subtexto"> Aisps</p>

					<div class="list-group ">
						<a href="?consulta=2" class="list-group-item">AISPs e os batalhões que as comandam</a>
						<a href="?consulta=4" class="list-group-item">AISPs que tem DPs com crimes registrados</a>
						<a href="?consulta=5" class="list-group-item">AISPs com seus batalhões e suas áreas de cobertura</a>
						<a href="?consulta=6" class="list-group-item">AISP que comandam batalhão mas não contém nenhuma DP</a>
            <a href="?consulta=10" class="list-group-item">AISP com maior área de cobertura</a>
          </div>
				</div>
				<div class="col-md-4">
					<p class="subtexto"> Homicídios e DP's</p>

					<div class="list-group">
						<a href="?consulta=7" class="list-group-item">As datas de fim mais recentes de uma administração por DP</a>
						<a href="?consulta=8" class="list-group-item">Mostra a média de homicídios culposos das dps no ano de 2010</a>
						<a href="?consulta=9" class="list-group-item">Quantidade de dps por AISP</a>
					</div>
				</div>
				<div class="col-md-4 ">
					<p class="subtexto"> Delegados</p>

					<div class="list-group ">
						<a href="?consulta=1" class="list-group-item">Nome e identificação de todos os delegados</a>
						<a href="?consulta=3" class="list-group-item">DPs sem delegado</a>
					</div>
				</div>
			</div>
			<hr />
<!--<div class="capa dimi">
				<div class="texto-capa">
					<div class="sombra">
						<h2>Pesquisa Genérica</h2>
					</div>
				</div>
			</div>

		<div class="row">
				<div class="col-md-4 centro">

					<p class="subtexto"> da Tabela</p>
					<div class="btn btn-default">
						<select>
							<option value="">Area_Cobertura</option>
							<option value="Aisp">Aisp</option>
							<option value="Batalhão">Batalhão</option>
							<option value="DP">DP</option>
							<option value="Administra">Administra</option>
							<option value="Delegado">Delegado</option>
						</select>
					</div>
				</div>
				<div class="col-md-4 centro">
					<p class="subtexto"> Selecione o Campo</p>

					<div class="btn btn-default centro">
						<select >
							<option value="Populacao ">Populacao </option>
							<option value=" Nome  "> Nome </option>
							<option value=" ID_Batalhao "> ID_Batalhao</option>
							<option value=" ID_AISP  "> ID_AISP  </option>
							<option value=" Endereco  "> Endereco  </option>
							<option value=" Comandante  "> Comandante  </option>
							<option value=" ID_DP "> ID_DP </option>
							<option value=" ID_AISP "> ID_AISP </option>
							<option value=" Mes  ">Mes </option>
							<option value=" Ano  "> Ano  </option>
							<option value=" ID_DP  "> ID_DP  </option>
							<option value=" Lesao_Corporal  "> Lesao_Corporal  </option>
							<option value=" Latrocinio  "> Latrocinio  </option>
							<option value=" Encontro_Ossada  "> Encontro_Ossada  </option>
							<option value=" Homicidio_Culposo  "> Homicidio_Culposo  </option>
							<option value=" Encontro_Cadaveres  "> Encontro_Cadaveres </option>
							<option value=" Lesao_Corporal_Morte  "> Lesao_Corporal_Morte  </option>
							<option value=" Lesao_Corporal_Dolosa  "> Lesao_Corporal_Dolosa  </option>
							<option value=" Estupro  "> Estupro  </option>
							<option value=" Homicidio_Doloso  "> Homicidio_Doloso  </option>
							<option value=" Tentativa_De_Homicidio  "> Tentativa_De_Homicidio  </option>
							<option value=" ID_Delegado  "> ID_Delegado  </option>
							<option value=" Cpf  "> Cpf </option>
							<option value=" dataInicio  ">dataInicio  </option>
							<option value=" ID_DP  "> ID_DP  </option>
							<option value=" dataFim  "> dataFim </option>

						</select>
					</div>
				</div>

				<div class="col-md-4 ">
					<p class="subtexto"> Confirmar</p>
					<div class="centro">
						<form>
							<button type="submit" class="btn btn-default">OK</button>
						</form>
					</div>

				</div>
			</div>

		</div>
-->
      <div class="capa dimi">
				<div class="texto-capa">
					<div class="sombra">
						<h2>Resultados</h2>
					</div>
				</div>
			</div>

      <table class="table table-striped table-condensed" style="background: #ffffff;">
        <?php
          if(isset($_GET["consulta"])){
            $consulta = $_GET["consulta"];
            switch($consulta){
              case 1:
                echo "<thead><tr><th style='text-align: center;' colspan='2'>Nome e identificação de todos os delegado</th></tr></thead>";
                $sql = "SELECT Nome, ID_Delegado FROM delegado";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0){
                    echo "<thead><tr><th>ID</th><th>Nome</th></tr></thead>";
                    while($row = mysqli_fetch_assoc($result)) {
                      echo "<tr><td>";
                        echo $row["ID_Delegado"]. "</td><td>" . $row["Nome"];
                      echo "</td></tr>";
                    }
                } else {
                    echo "<tr><td>0 resultados</td><tr>";
                }
                break;
              case 2:
                echo "<thead><tr><th style='text-align: center;' colspan='2'>AISPs e os batalhões que as comandam</th></tr></thead>";
                $sql = "SELECT aisp.ID_AISP as Aisps, ID_Batalhao as Batalhao from aisp natural join batalhao";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0){
                    echo "<thead><tr><th>AISP</th><th>Batalhao</th></tr></thead>";
                    while($row = mysqli_fetch_assoc($result)) {
                      echo "<tr><td>AISP ";
                        echo $row["Aisps"]. "</td><td>" . $row["Batalhao"] . "° BPM";
                      echo "</td></tr>";
                    }
                } else {
                    echo "<tr><td>0 resultados</td><tr>";
                }

                break;
              case 3:
                echo "<thead><tr><th style='text-align: center;' colspan='2'>DPs sem delegado</th></tr></thead>";
                $sql = "SELECT D.ID_DP as DP from dp D LEFT OUTER JOIN administra A on A.ID_DP = D.ID_DP where A.ID_Delegado is null";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0){
                    echo "<thead><tr><th>DP</th></tr></thead>";
                    while($row = mysqli_fetch_assoc($result)) {
                      echo "<tr><td>";
                        echo $row["DP"] . " Delegacia Policial";
                      echo "</td></tr>";
                    }
                } else {
                    echo "<tr><td>0 resultados</td><tr>";
                }
                break;
              case 4:

                echo "<thead><tr><th style='text-align: center;' colspan='2'>AISPs que tem DPs com crimes registrados</th></tr></thead>";
                $sql = "SELECT A.ID_AISP AISPs, D.ID_DP DPs from aisp A left outer join dp D on A.ID_AISP = D.ID_AISP left outer join crime C on D.ID_DP = C.ID_DP";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0){
                    echo "<thead><tr><th>AISP</th><th>DP</th></tr></thead>";
                    while($row = mysqli_fetch_assoc($result)) {
                      echo "<tr><td>AISP ";
                        echo $row["AISPs"]. "</td><td>" . $row["DPs"] . "ª Delegacia Policial";
                      echo "</td></tr>";
                    }
                } else {
                    echo "<tr><td>0 resultados</td><tr>";
                }

                break;
              case 5:
                echo "<thead><tr><th style='text-align: center;' colspan='2'>AISPs com seus batalhões e suas áreas de cobertura</th></tr></thead>";
                $sql = "SELECT A.ID_AISP as Aisp, Nome as Area, ID_Batalhao as Batalhao from area_cobertura natural join aisp as A natural join batalhao";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0){
                    echo "<thead><tr><th>AISP</th><th>Bairro</th><th>Batalhao</th></tr></thead>";
                    while($row = mysqli_fetch_assoc($result)) {
                      echo "<tr><td>AISP ";
                        echo $row["Aisp"]. "</td><td>" . $row["Area"] . "</td><td>" . $row["Batalhao"] . "° BPM";
                      echo "</td></tr>";
                    }
                } else {
                    echo "<tr><td>0 resultados</td><tr>";
                }
                break;
              case 6:
                echo "<thead><tr><th style='text-align: center;' colspan='2'>AISP que comandam batalhão mas não contém nenhuma DP</th></tr></thead>";
                $sql = "SELECT A.ID_AISP from batalhao B natural join aisp A left join dp D on D.ID_AISP = A.ID_AISP where D.ID_AISP is null";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0){
                    echo "<thead><tr><th>AISP</th></tr></thead>";
                    while($row = mysqli_fetch_assoc($result)) {
                      echo "<tr><td>AISP ";
                        echo $row["ID_AISP"];
                      echo "</td></tr>";
                    }
                } else {
                    echo "<tr><td>0 resultados</td><tr>";
                }
                break;
              case 7:
                echo "<thead><tr><th style='text-align: center;' colspan='2'>A data de fim mais recente de uma administração por DP</th></tr></thead>";
                $sql = "SELECT D.ID_DP as DP, max(dataFim) data from dp D natural join administra";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0){
                    echo "<thead><tr><th>DP</th><th>Data Final do Mandato</th></tr></thead>";
                    while($row = mysqli_fetch_assoc($result)) {
                      echo "<tr><td>";
                        echo $row["DP"] . "ª Delegacia Policial</td><td>" . $row["data"];
                      echo "</td></tr>";
                    }
                } else {
                    echo "<tr><td>0 resultados</td><tr>";
                }
                break;
              case 8:
                echo "<thead><tr><th style='text-align: center;' colspan='2'>Média de homicídios culposos das DPs no ano de 2017</th></tr></thead>";
                $sql = "SELECT D.ID_DP as DPs, avg(Homicidio_Culposo) media from dp D natural join crime where ano = 2017 group by DPs";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0){
                    echo "<thead><tr><th>DP</th><th>Media</th></tr></thead>";
                    while($row = mysqli_fetch_assoc($result)) {
                      echo "<tr><td>";
                        echo $row["DPs"] . "ª Delegacia Policial</td><td>" . number_format($row["media"], 2) . " Homicídios Culposos" ;
                      echo "</td></tr>";
                    }
                } else {
                    echo "<tr><td>0 resultados</td><tr>";
                }
                break;
              case 9:
                echo "<thead><tr><th style='text-align: center;' colspan='2'>Quantidade de DPs por AISP</th></tr></thead>";
                $sql = "SELECT A.ID_AISP as Aisps, count(D.ID_DP) as qtd from aisp A natural join dp D group by Aisps";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0){
                    echo "<thead><tr><th>AISP</th><th>Total DPs</th></tr></thead>";
                    while($row = mysqli_fetch_assoc($result)) {
                      echo "<tr><td>AISP ";
                        echo $row["Aisps"] . "</td><td>" . $row["qtd"] . " DPs" ;
                      echo "</td></tr>";
                    }
                } else {
                    echo "<tr><td>0 resultados</td><tr>";
                }
                break;
              case 10:
                echo "<thead><tr><th style='text-align: center;' colspan='2'>Mostra a AISP com maior área de cobertura</th></tr></thead>";
                $sql = "SELECT A.ID_AISP as Aisp, count(nome) total from aisp A natural join area_cobertura group by Aisp having count(Nome) >= all (select count(Nome) from aisp A natural join area_cobertura group by A.ID_AISP)";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0){
                    echo "<thead><tr><th>AISP</th><th>Total Bairros</th></tr></thead>";
                    while($row = mysqli_fetch_assoc($result)) {
                      echo "<tr><td>AISP ";
                        echo $row["Aisp"] . "</td><td>" . $row["total"] ;
                      echo "</td></tr>";
                    }
                } else {
                    echo "<tr><td>0 resultados</td><tr>";
                }
                break;
            }
          }
        ?>
      </table>
  </section>

    <!-- Rodapé -->
    <footer id="rodape">
	    <div class="container">
			<div class="col-md-2 navbar-brand branco">MeuRio❤</div>
	        <div class="col-md-4">
		        <h3 class="letra">Comunidade</h3>
		        <ul class="nav .coisa">
			        <li><a href="#">Informações Uteis</a></li>
			        <li><a href="#">Desenvolvedores</a></li>
			        <li><a href="#">Direitos Autorais</a></li>
		        </ul>
	        </div>
		    <div class="col-md-6">
			    <ul class="nav">
				    <li class="item-rede-social"> <a href="https://fb.com"> <img src="imagens/facebook.png" class="img-responsive"></a></li>
				    <li class="item-rede-social"> <a href="https://instagram.com"><img src="imagens/instagram.png" class="img-responsive"></a></li>
				    <li class="item-rede-social"> <a href="https://twitter.com"> <img src="imagens/twitter.png" class="img-responsive"></a></li>
			    </ul>
		    </div>
	    </div>
    </footer>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
