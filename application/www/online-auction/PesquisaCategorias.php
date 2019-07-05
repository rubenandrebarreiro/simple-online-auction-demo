<html>
	<body background="img_2.jpg" border="0%" width="100%" height="100%" norepeat text="#8A4117" link="#8A4117" alink="#8A4117" vlink="#8A4117">
	<center>
	<H2 align=center> Pesquisa Por Categoria </H2>
	<form method="POST" action="PesquisaCategorias.php">
	<b>Insira o texto do nome da categoria que deseja pesquisar</b>
	<br>
	<input type="text" name="Texto">
	<br>
	<input type="submit" value="Pesquisar">
	<br>
	<br>
	<table border =2 align=center bgcolor="#FFCC99">
				<tr>
					<td><font color="#8A4117"><b> Nome </b></font></td>
					<td><font color="#8A4117"><b> Descrição </b></font></td>
					<td><font color="#8A4117"><b> Número de Inventário </b></font></td>
				</tr>
	</form>
	<?php
		$con = mysqli_connect("localhost","root","","leilao") or die("Erro na conexão");

		$t=$_POST['Texto'];
		
		$r = mysqli_query($con, "select * from categorias where nome_categoria like '%" . $t . "%'");
		$nr = mysqli_num_rows($r);

		for($i = 0; $i < $nr; $i++)
		{
			$reg = mysqli_fetch_assoc($r);
			echo "<tr>";
			echo "<td>".$reg['nome_categoria']."</td>";
			echo "<td>".$reg['desc_categoria']."</td>";
			echo "<td>".$reg['nr_inv']."</td>";
			echo "</tr>";
		}
	?>
	</center>
	</body>
</html>