<?php
	if($_POST){
		$nome = $_POST["nome"];
		$telefone = $_POST["telefone"];
		$email = $_POST["email"];
		$dataNascimento = $_POST["dataNascimento"];
	
		include("Pessoa.php");
		
		$cadastrarPessoa = new Pessoa ();
		
		$retorno = $cadastrarPessoa->addPessoa($nome, $telefone, $email, $dataNascimento);
		
		if($retorno==1){
			echo "Sucesso!";
		}else{
			echo "Erro!";
		}
	}else{
		echo "Dados no formulario";
	}

?>