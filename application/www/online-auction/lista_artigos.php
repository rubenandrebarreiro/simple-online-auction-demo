<html>
	<head>
		<title> PSI - Trabalho de Grupo/Individual </title>
	</head>
	<body background="img_2.jpg" border="0%" width="100%" height="100%" norepeat text="#8A4117" link="#8A4117" alink="#8A4117" vlink="#8A4117">
		<H2 align=center> Listagem dos Artigos </H2>
			<table border =2 align=center bgcolor="#FFCC99">
				<tr>
					<td><font color="#8A4117"><b> Nome </b></font></td>
					<td><font color="#8A4117"><b> Base da Licitação </b></font></td>
					<td><font color="#8A4117"><b> Valor Mínimo </b></font></td>
					<td><font color="#8A4117"><b> Data Limite </b></font></td>
					<td><font color="#8A4117"><b> Hora Limite </b></font></td>
					<td><font color="#8A4117"><b> Categoria </b></font></td>
					<td><font color="#8A4117"><b> Histórico </b></font></td>
					<td><font color="#8A4117"><b> Forma de Pagamento </b></font></td>
					<td><font color="#8A4117"><b> Utilizador </b></font></td>
					<td><font color="#8A4117"><b> Localização </b></font></td>
				</tr>
			<?php
				$con = mysqli_connect("localhost","root","","leilao") or die("Erro na conexão");

				if (!$con)
				{
					echo "Erro";
					exit;
				}
				
				$r = mysqli_query($con, "select * from artigos, categorias, utilizadores where artigos.id_categoria = categorias.id_categoria");
				$nr = mysqli_num_rows($r);
				
				for ($i = 0; $i < $nr; $i++)
				{
					$reg = mysqli_fetch_assoc($r);
					
					echo "<tr>";
					echo "<td>".$reg['nome_artigo']."</td>";
					echo "<td>".$reg['base_licitacao']."</td>";
					echo "<td>".$reg['valor_min']."</td>";
					echo "<td>".$reg['data_lim']."</td>";
					echo "<td>".$reg['hora_lim']."</td>";
					echo "<td>".$reg['nome_categoria']."</td>";
					echo "<td>".$reg['historico']."</td>";
					echo "<td>".$reg['forma_pag']."</td>";
					echo "<td>".$reg['nome_util']."</td>";
					echo "<td>".$reg['localizacao']."</td>";
					echo "</tr>";
				}
				?>
			</table>
	</body>
</html>