<html>
	<body background="img_2.jpg" border="0%" width="100%" height="100%" norepeat text="#8A4117" link="#8A4117" alink="#8A4117" vlink="#8A4117">
	<center>
	<H2 align=center> Pesquisa Por Utilizador e Por Licitação</H2>
	<form method="post" action = "PesquisaUtilizadoresLicitacoes.php">
	<b>Insira o texto do nome do utilizador que deseja pesquisar:</b>
	<br>
	<input type="input" name ="utilizador">
	<br>
	<br>
	<b>Insira o valor da licitação que deseja pesquisar:</b>
	<br>
	<input type="input" name ="licitacao">
	<br>
	<input type="submit" value="Pesquisar">
	<br>
	<br>
	<table border =2 align=center bgcolor="#FFCC99">
				<tr>
					<td><font color="#8A4117"><b> Utilizador </b></font></td>
					<td><font color="#8A4117"><b> Artigo </b></font></td>
					<td><font color="#8A4117"><b> Data </b></font></td>
					<td><font color="#8A4117"><b> Hora </b></font></td>
					<td><font color="#8A4117"><b> Valor </b></font></td>
				</tr>

	</form>
	<?php
		
		$util=$_POST['utilizador'];
		$licit=$_POST['licitacao'];

		$con = mysqli_connect("localhost","root","","leilao") or die("Erro na conexão");

		$r1 = mysqli_query($con, "select * from utilizadores where nome_util like '%" . $util . "%'");
		
		$nl1 = mysqli_num_rows($r1);
		
		if($nl1 == 0)
			echo "Dados não encontrados";
		else
		{
			$reg1 = mysqli_fetch_assoc($r1);
				
			$r2 = mysqli_query($con, "select nome_util, valor, data_licit, hora_licit, nome_artigo from licitacoes, artigos, utilizadores where utilizadores.id_util= '".$reg1['id_util'] . "' and  valor= ".$licit ." and licitacoes.id_artigo = artigos.id_artigo");
			
			$nl2 = mysqli_num_rows($r2);
			
			if ($nl2 == 0)
				echo "Dados não encontrados";
			else
			{
				$reg2 = mysqli_fetch_assoc($r2);
					
				echo "<tr>";
				echo "<td>".$reg1['nome_util']."</td>";
				echo "<td>".$reg2['nome_artigo']."</td>";
				echo "<td>".$reg2['data_licit']."</td>";
				echo "<td>".$reg2['hora_licit']."</td>";
				echo "<td>".$reg2['valor']."</td>";
				echo "</tr>";
			}
		}
	?>
	</table>
</html>



