<html>
	<head>
		<title> PSI - Trabalho de Grupo/Individual </title>
	</head>
	<body background="img_2.jpg" border="0%" width="100%" height="100%" norepeat text="#8A4117" link="#8A4117" alink="#8A4117" vlink="#8A4117">
		<H2 align=center> Listagem das Avaliações </H2>
			<table border =2 align=center bgcolor="#FFCC99">
				<tr>
					<td><font color="#8A4117"><b> Nome Avaliador </b></font></td>
					<td><font color="#8A4117"><b> Nome Avaliado </b></font></td>
					<td><font color="#8A4117"><b> Classificação </b></font></td>
				</tr>
			<?php
				$l=mysqli_connect("localhost","root","");
				if (!$l)
				{
					echo "Erro";
					exit;
				}
				mysqli_select_db($l,'leilao');
				$c1="select id_aval,nome_util,classificacao from avaliacoes, utilizadores where utilizadores.id_util=avaliacoes.id_util_avaliador";
				$r1=mysqli_query($l,$c1);
				$nr=mysqli_num_rows($r1);
				
				$c2="select id_aval,nome_util, classificacao from avaliacoes,utilizadores where utilizadores.id_util=avaliacoes.id_util_avaliado";
				$r2=mysqli_query($l,$c2);
				$nr=mysqli_num_rows($r2);
				
				for ($i=0;$i<$nr;$i++)
				{
					$reg1=mysqli_fetch_assoc($r1);
					$reg2=mysqli_fetch_assoc($r2);
					echo "<tr>";
					echo "<td>".$reg1['nome_util']."</td>";
					echo "<td>".$reg2['nome_util']."</td>";
					echo "<td>".$reg1['classificacao']."</td>";
					echo "</tr>";
				}
				?>
			</table>
	</body>
</html>