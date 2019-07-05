<html>
	<head>
		<title> PSI - Trabalho de Grupo/Individual </title>
	</head>
	<body background="img_2.jpg" border="0%" width="100%" height="100%" norepeat text="#8A4117" link="#8A4117" alink="#8A4117" vlink="#8A4117">
		<H2 align=center> Listagem dos Utilizadores </H2>
			<table border =2 align=center bgcolor="#FFCC99">
				<tr>
					<td><font color="#8A4117"><b> Nome </b></font></td>
					<td><font color="#8A4117"><b> E-Mail </b></font></td>
				</tr>
			<?php
				$con = mysqli_connect("localhost","root","","leilao") or die("Erro na conexão");

				if (!$con)
				{
					echo "Erro";
					exit;
				}
				
				$r = mysqli_query($con, "select * from utilizadores");
				$nr = mysqli_num_rows($r);
				
				for ($i = 0; $i < $nr; $i++)
				{
					$reg = mysqli_fetch_assoc($r);
					
					echo "<tr>";
					echo "<td>".$reg['nome_util']."</td>";
					echo "<td>".$reg['email']."</td>";
					echo "</tr>";
				}
				?>
			</table>
	</body>
</html>