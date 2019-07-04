<html>
	<head>
		<title> PSI - Trabalho de Grupo/Individual </title>
	</head>
	<body background="img_2.jpg" border="0%" width="100%" height="100%" norepeat text="#8A4117" link="#8A4117" alink="#8A4117" vlink="#8A4117">
		<H2 align=center> Listagem das Licitações </H2>
			<table border =2 align=center bgcolor="#FFCC99">
				<tr>
					<td><font color="#8A4117"><b> Valor </b></font></td>
					<td><font color="#8A4117"><b> Data de Licitação </b></font></td>
					<td><font color="#8A4117"><b> Hora de Licitação </b></font></td>
					<td><font color="#8A4117"><b> Utilizador </b></font></td>
					<td><font color="#8A4117"><b> Artigo </b></font></td>
				</tr>
			<?php
				$l=mysqli_connect("localhost","root","");
				if (!$l)
				{
					echo "Erro";
					exit;
				}
				mysqli_select_db($l,'leilao');
				$c="select * from licitacoes, utilizadores, artigos where artigos.id_artigo = licitacoes.id_artigo and licitacoes.id_util = utilizadores.id_util";
				$r=mysqli_query($l,$c);
				$nr=mysqli_num_rows($r);
				for ($i=0;$i<$nr;$i++)
				{
					$reg=mysqli_fetch_assoc($r);
					echo "<tr>";
					echo "<td>".$reg['valor']."</td>";
					echo "<td>".$reg['data_licit']."</td>";
					echo "<td>".$reg['hora_licit']."</td>";
					echo "<td>".$reg['nome_util']."</td>";
					echo "<td>".$reg['nome_artigo']."</td>";
					echo "</tr>";
				}
				?>
			</table>
	</body>
</html>