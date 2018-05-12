<html>
	<head>
		<meta charset="UTF-8">
		<title>Trabalho 2</title>
		<link rel="stylesheet" href="style.css" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.9.1/sweetalert2.min.css" />
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class ="col-sm-8 col-sm-offset-2">
					<img  class="img-responsive"  src="banner.png"/>
				</div>
			</div>

			<hr><p><b>O índice de Massa Corporal (IMC) é reconhecido como padrão internacional para avaliar
			o grau de obesidade. O IMC é calculado dividindo o peso (em kg) pela altura ao quadrado (em m).</b></p>	
			<br><br><br>
			<i><p>Utilize os campos abaixo para calcular seu IMC:</i></p><br>
			<div class="row">
				<div class="col-sm-6">
					
					<form class="form-horizontal" method='POST' action="trabalho2.php">
					<div class="form-group">
							<label class="col-sm-2 control-label blueLabel">NOME:</label>
							<div class="col-sm-8">
								<input type="text" class="form-control " name="nome" placeholder="Nome" required="required">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label blueLabel">SEXO:</label>
							<div class="col-sm-5">
								<select class="form-control" name="sexo">
									<option value="Masculino">MASCULINO</option>
									<option value="Feminino">FEMININO</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label blueLabel">Nascimento:</label>
							<div class="col-sm-5">
								<input type="text" class="form-control " name="nascimento" id="campoData" required="required">
							</div>
							<div class="col-sm-5">
								<p id="p1">Digite sua Data de Nascimento Ex.:10/12/1994</p>
							</div>

						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label blueLabel">PESO:</label>
							<div class="col-sm-5">
								<input name="peso" type="number" class="form-control" placeholder="kg" required="required">
							</div>
							<div class="col-sm-4">
								<p id="p1">Digite seu peso (em Kg) Ex.: 80Kg</p>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label blueLabel">ALTURA:</label>
							<div class="col-sm-5">
								<input type="text" class="form-control " name="altura" id="alt" maxlength="3" placeholder="m" required="required">
							</div>
							<div class="col-sm-4">
								<p id="p1">Digite sua altura (em m) Ex.: 1.80m</p>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-5 col-sm-offset-3">
								<button type="input" class="btn btn-primary btn-lg">CALCULAR</button>
							</div>
						</div>
					</form>
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
			
					<label class="blueLabel" Exemplo de como calcular o índice de Massa Corporal (IMC):<br><br>
					80kg / 1,80m x 1,80m = 24,69(Normal)<br><br>
					IMC = &nbsp;<u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PESO&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u><br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(ALTURA X ALTURA)</label><br><br>
				</div>
		</div>
	</body>
	<script>
		jQuery(function($){
			$("#campoData").mask("99/99/9999",{placeholder:"01/01/2000"});
			 $("#alt").mask('####00.00', {reverse: true});
		});
	</script>
</html>

