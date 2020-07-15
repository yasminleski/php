<?php
	class Pessoa{
		private $id, $nome, $telefone, $email, $dataNascimento;
		
	 public function addPessoa($nome, $telefone, $email, $dataNascimento){
		
			include ("conexao.php");
			
			$this->setNome($nome);
			$this->setTelefone($telefone);
			$this->setEmail($email);
			$this->setDataNascimento($dataNascimento);
			
			$stmt = $conectar->prepare("INSERT INTO pessoa(nome, telefone, email, dataNascimento)
			  VALUES (?, ?, ?, ?)");
			  
			$stmt->bind_param("ssss", $this->getNome(), $this->getTelefone(),$getEmail(),$this->getDataNascimento());
			$stmt->execute();
			$stmt->close();
			
			if($conectar->affected_rows){
				return 1;
			} else{
				return 0;
			  }
	 }
	 public function relatorioSimples(){
		include ("conexao.php");
		$query = "SELECT id, nome, telefone FROM pessoa";
		$busca = $conectar->query($query);
		
		$retornoBanco = array();
		while ($linha = $busca->fetch_assoc()){
			$retornoBanco[] = $linha;
		}
		return $retornoBanco;
	}
	public function setID($id){$this->id = $id;}
	public function setNome($nome){$this->nome = $nome;}
	public function setTelefone($telefone){$this->telefone = $telefone;}
	public function setEmail($email){$this->email = $email;}
	public function setDataNascimento($dataNascimento){$this->dataNascimento = $dataNascimento;}
		
	public function getId(){ return $this->id;}
	public function getNome(){ return $this->nome;}
	public function getTelefone(){ return $this->telefone;}
	public function getEmail(){ return $this->email;}
	public function getDataNascimento(){ return $this->dataNascimento;}

}	
?>