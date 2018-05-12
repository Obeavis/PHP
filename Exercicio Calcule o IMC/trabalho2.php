<html>
<head>
	<meta charset="UTF-8">
	<title>Trabalho 2</title>
	<link rel="stylesheet" href="style.css" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
</head>
	<body>
	<?php
		 ini_set('default_charset','UTF-8');

	if($_POST)
	{
		$nome = $_POST['nome'];
		$altura = $_POST['altura'];
		$peso = $_POST['peso'];
		$nascimento = $_POST['nascimento'];
		$sexo = $_POST['sexo'];
		
		function CalculaImc($p,$a)
		{
			$calculo = $p/($a*$a);
			
			$resultado = number_format($calculo);
			
			return $resultado;
		}
		
		$ResultadoImc = (int) CalculaImc($peso,$altura);
		
		function CategoriaImc($dados)
		{
			if($dados <= 18.5)
			{
				$cat = "Abaixo do Peso";
				return $cat;
			}
			elseif($dados >18.5 && $dados < 24.9)
			{
				$cat = "com o Peso Normal";
				return $cat;
			}
			elseif($dados >24.9 && $dados < 29.9)
			{
				$cat = "com Sobrepeso";
				return $cat;
			}
			elseif($dados >29.9 && $dados < 34.9)
			{
				$cat = "com Obesidade Grau I";
				return $cat;
			}
			elseif($dados >34.9 && $dados < 39.9)
			{
				$cat = "com Obesidade Grau II";
				return $cat;
			}
			else
			{
				$cat = "Obesidade Grau III";
				return $cat;
			}
		}
		$categoria = CategoriaImc($ResultadoImc);
		
	}		
		
	
?>
<div class="container">
	<div class="row">
		<div class ="col-sm-8 col-sm-offset-2">
			<img  class="img-responsive"  src="banner.png"/>
		</div>
	</div>
	<hr><p><b>O índice de Massa Corporal (IMC) é reconhecido como padrão internacional para avaliar
	o grau de obesidade. O IMC é calculado dividindo o peso (em kg) pela altura ao quadrado (em m).</b></p>	
	<br><br><br>
	<div class="row">
		<div class="col-sm-6">
		<?php	
			
		
		echo ('<p  style="font-weight: bold; font-size: 180%; text-align:center; margin-top: 2%">
		Nome: '.$nome. '<br> Indivíduo: '.$sexo.'<br> Nascido em: '.$nascimento.
			'<br> Seu imc é: '.$ResultadoImc. '<br> você está ' .$categoria.
			'<br>Resultado obtido a partir do<br>peso: '.$peso.'kg<br>e da altura: '.$altura.
			'm</p>');
		?>
			
		</div>
<div class="col-sm-6 table-responsive">
					<table  class="table table-bordered">
							<tr class="categoria">
								<td><label>Categoria</label></td>
								<td ><label>IMC</label></td>
								<td width="180" class="normal"  rowspan="7">
									<br><br><br><br>
									<label class="blueLabel">Peso Saudável equivale ao peso Normal.</label>
								</td>
							</tr>
							<tr class="abaixo">
								<td><label>Abaixo do peso</label></td>
								<td><label>Abaixo de 18,5</label></td>
							</tr>
							<tr class="normal" >
								<td><label class="blueLabel">Peso Normal</label></td> 
								<td><label class="blueLabel">18,5 - 24,9</label></td>
							</tr > 
							<tr class="pesos">
								<td><label>Sobrepeso</label></td> 
								<td><label>25,0 - 29,9</label></td>
							</tr > 
							<tr class="pesos">
								<td><label>Obesidade Grau I</label></td> 
								<td><label>30,0 - 34,9</label></td>
							</tr>
							<tr class="pesos">
								<td><label>Obesidade Grau II</label></td> 
								<td><label>35,0 - 39,9</label></td>
							</tr>
							<tr class="obesidadeG3">
								<td><label>Obesidade Grau III</label></td> 
								<td><label>40,0 e acima</label></td>
							</tr>
					</table>
				</div>
	</div> 
		<div class ="col-sm-5 col-sm-offset-3"><br>
	
			<label id="label" align="center">Exemplo de como calcular o índice de Massa Corporal (IMC):<br><br>
			80kg / 1,80m x 1,80m = 24,69(Normal)<br><br>
			IMC = &nbsp;<u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PESO&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u><br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(ALTURA X ALTURA)</label><br><br>
		</div>
</div>
<?php

?>
</body>
</html>