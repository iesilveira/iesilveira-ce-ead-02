<!DOCTYPE html>
<html>
	<head>
		<meta charset='utf-8'>
		<?php
			$va1= $_POST['va1'];
			$va2= $_POST['va2'];
			$va3= $_POST['va3'];
			$trabalhos= $_POST['trabalhos'];
			
			if ($va1 + $va2 + $va3 + $trabalhos / 4 >= 60)
			{
				echo "<title> DECLARAÇÃO POSITIVA </title> <link rel='shortcut icon' href='https://pedreiraagora.files.wordpress.com/2013/04/maoverde.png'>";
			}
			else 
			{
				echo "<title> DECLARAÇÃO NEGATIVA </title> <link rel='shortcut icon' href='https://pedreiraagora.files.wordpress.com/2013/04/maovermelha.png'>";
			}
		?>
		
		<style>
			body {
				margin: 0 auto;
				width: 700px;
				font-family: Calibri;
			}
			hr {
				margin: 0 auto;
				width: 350px;
			}
			.sign {
				vertical-align: top;
				text-align: center;
			}
			img {
				max-width:30%;
				height:auto;
			}
		</style>
	</head>
	<body>
		<p align='center'>
		<?php
			$img= $_POST['img'];
			
			echo "<img src='$img' alt='FACULDADE_LOGO' title='FACULDADE_LOGO'>";
		?>
		</p>
		<h1 align='center'>
			DECLARAÇÃO
		</h1>
		<?php 
			$aluno= $_POST['aluno'];
			$curso= $_POST['curso'];
			$disciplina= $_POST['disciplina'];
			
			if ($va1 + $va2 + $va3 + $trabalhos / 4 >= 60)
			{
				echo "<p align='justify'> Declaramos para os devidos fins, que $aluno concluiu satisfatoriamente as atividades da disciplina $disciplina do curso de $curso.</p>";
			}
			else 
			{
				echo "<p align='justify'> Declaramos para os devidos fins, que $aluno <b style='color:red;'>NÃO</b> concluiu satisfatoriamente as atividades da disciplina $disciplina do curso de $curso.</p>";
			}
		?>
		<p align='justify'>
			<?php
			echo "Segue o desempenho de $aluno:";
			?>
		</p>
		<br>
		<?php
			$va1= $_POST['va1'];
			$va2= $_POST['va2'];
			$va3= $_POST['va3'];
			$trabalhos= $_POST['trabalhos'];
			$valor1= '15';
			$valor2= '25';
			$valor3= '35';
			$valort= '25';
			$desempenho1= ($va1 / $valor1 * '100');
			$desempenho2= ($va2 / $valor2 * '100');
			$desempenho3= ($va3 / $valor3 * '100');
			$desempenhot= ($trabalhos / $valort * '100');
			
			echo "<table align='center' border='2'>
				<tr style='color:white; background-color:#777777;'>
				<th>
					CRITÉRIO
				</th>
				<th>
					VALOR TOTAL
				</th>
				<th>
					NOTA DO ALUNO
				</th>
				<th>
					DESEMPENHO (%)
				</th>
				</tr>
				<tr align='center'>
				<td>
					PROVA 1
				</td>
				<td>
					15
				</td>
				<td>
					$va1
				</td>
				<td>".
					round ($desempenho1,2)." %
				</td>
				</tr>
				<tr align='center'>
				<td>
					PROVA 2
				</td>
				<td>
					25
				</td>
				<td>
					$va2
				</td>
				<td>".
					round ($desempenho2,2)." %
				</td>
				</tr>
				<tr align='center'>
				<td>
					PROVA 3
				</td>
				<td>
					35
				</td>
				<td>
					$va3
				</td>
				<td>".
					round ($desempenho3,2)." %
				</td>
				</tr>
				<tr align='center'>
				<td>
					TRABALHOS
				</td>
				<td>
					25
				</td>
				<td>
					$trabalhos
				</td>
				<td>".
					round ($desempenhot,2)." %
				</td>
				</tr>
			<table>";
		?>
		<br>
		<?php
			$total=($va1+$va2+$va3+$trabalhos);
			$professor= $_POST['professor'];
			$coordenador= $_POST['coordenador'];
			
			if ($total >= 90)
			{
				$conceito = 'excelente';
			}
			if ($total >= 80 && $total < 90)
			{
				$conceito = 'ótimo';
			}
			if ($total >= 70 && $total < 80)
			{
				$conceito = 'bom';
			}
			if ($total >= 60 && $total < 70)
			{
				$conceito = 'ruim';
			}
			if ($total < 60)
			{
				$conceito = 'péssimo';
			}
			
			echo
			"<p align='justify'> 
				Com esse resultado, o conceito de $aluno foi <i>$conceito</i>, já que sua nota total foi de <b>$total</b> pontos.
			</p>
			<p align='center'>
				Belo Horizonte, ". date ("d/m/Y").
			"</p>
			<br>
			<br>
			<hr>
			<div align='center'>
				$professor - Professor(a)
			</div>
			<br>
			<br>
			<br>
			<hr>
			<div align='center'>
				$coordenador - Coordenador(a)
			</div>
			<br>
			<br>";
			$lado= $_POST['lado'];
			$perimetro= $lado*4;
			$area= $lado*$lado;
			echo
			"<p align='justify'> 
				Perímetro: $perimetro
			</p>
			<p align='justify'> 
				Área:  $area
			</p>";
		?>
		
	</body>
</html>