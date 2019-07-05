<html>
	<head>
		<title> PSI - Trabalho de Grupo/Individual </title>
	</head>
	<body background="img_2.jpg" border="0%" width="100%" height="100%" norepeat text="#8A4117" link="#8A4117" alink="#8A4117" vlink="#8A4117">
		<H2 align=center> Valor M�ximo das Licita��es </H2>
			<table border =2 align=center bgcolor="#FFCC99">
				<tr>
					<td><font color="#8A4117"><b> Valor</b></font></td>
					<td><font color="#8A4117"><b> Artigo</b></font></td>
					<td><font color="#8A4117"><b> Data </b></font></td>
					<td><font color="#8A4117"><b> Hora </b></font></td>
					<td><font color="#8A4117"><b> Utilizador</b></font></td>
				</tr>
			<?php
				$con = mysqli_connect("localhost","root","","leilao") or die("Erro na conexão");

				if (!$con)
				{
					echo "Erro";
					exit;
				}
				
				$r = mysqli_query($con, "select nome_util, nome_artigo, data_licit, hora_licit, valor from licitacoes, artigos, utilizadores where valor=(select max(valor) from licitacoes) and licitacoes.id_artigo=artigos.id_artigo and utilizadores.id_util=licitacoes.id_util");
				$nr = mysqli_num_rows($r);
				
				for ($i = 0; $i < $nr; $i++)
				{
					$reg = mysqli_fetch_assoc($r);
					
					echo "<tr>";
					echo "<td>".$reg['valor']."</td>";
					echo "<td>".$reg['nome_artigo']."</td>";
					echo "<td>".$reg['data_licit']."</td>";
					echo "<td>".$reg['hora_licit']."</td>";
					echo "<td>".$reg['nome_util']."</td>";
					echo "</tr>";
				}
				?>
			</table>
	</body>
</html>