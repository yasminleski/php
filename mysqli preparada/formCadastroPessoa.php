<html >
	<head>
		<meta charset="utf-8">
		<title> Cadastro de Pessoa</title>
		<style>
		.form{
			background-color: #fdfd96;
		}
		.lista{
			background-color: #20b2aa;
		}
		</style>
	</head>
	<body>
	<div class="form">
		<form action="cadastroPessoa.php" method="post">
		 <div>
			<label form="nome">Nome:</label>
			<input type="text" id="nome" name="nome" placeholder="Nome">
		 </div>
		 <div>
			<label form="telefone">Telefone:</label>
			<input type="text" id="telefone" name="telefone" placeholder="Telefone">
		 </div>
		 <div>
			<label form="email">Email:</label>
			<input type="text" id="email" name="email" placeholder="Email">
		 </div>
		 <div>
			<label form="dataNascimento">Data de Nascimento:</label>
			<input type="date" id="dataNascimento" name="dataNascimento">
		 </div>
		 <div>
			<input type="submit" value="Gravar">
		 </div>
		</form>
	</div>
		
	<div class=lista">
		<?php
			include("Pessoa.php");
			$listaPessoa = new Pessoa();
			$retornoListaBanco = $listaPessoa->relatorioSimples();
			if($retornoListaBanco){
		?>
		
				<table>
					<th>ITEM</th>
					<th>NOME</th>
					<th>EMAIL</th>
					<th>TELEFONE </th>
					<th>AÇÃO </th>
					
				<?php
				$i=1;
				foreach($retornoListaBanco as $value){
				?>
					<tr>
						<td><?=$i++;?></td>
						<td><?=$value["nome"];?></td>
						<td><?=$value["email"];?></td>
						<td><?=$value["telefone"];?></td>
						<td>ALTERAR</td>
						<td>EXCLUIR</td>
					</tr>
					<?php
				}
				echo "</table>";
			}else{
				echo "Ainda não existe registro";
			}
			?>
	</div>
	</body>
</html>
		
	
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 