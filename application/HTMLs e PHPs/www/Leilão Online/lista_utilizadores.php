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
				$l=mysqli_connect("localhost","root","");
				if (!$l)
				{
					echo "Erro";
					exit;
				}
				mysqli_select_db($l,'leilao');
				$c="select * from utilizadores";
				$r=mysqli_query($l,$c);
				$nr=mysqli_num_rows($r);
				for ($i=0;$i<$nr;$i++)
				{
					$reg=mysqli_fetch_assoc($r);
					echo "<tr>";
					echo "<td>".$reg['nome_util']."</td>";
					echo "<td>".$reg['email']."</td>";
					echo "</tr>";
				}
				?>
			</table>
	</body>
</html>