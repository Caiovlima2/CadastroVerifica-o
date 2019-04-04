<?php 

	include_once "Connection.class.php";

	class Pessoa{

		private $nome;
		private $data;
		private $telefone;
		private $sexo;
		private $email;

		public function cadastrar(){

			$con = new Connection();

			$sql = "INSERT INTO tblPessoa (nm_Pessoa, ds_Telefone_Pessoa, sg_Sexo_Pessoa, ds_Email_Pessoa, dt_Nascimento_Pessoa) 
					VALUES
					('$this->nome', '$this->telefone', '$this->sexo', '$this->email', '$this->data');";

			mysqli_query($con->con, $sql);

		}

		public function setNome($nome){

			$this->nome = $nome;
		}

		public function getNome(){

			return $this->nome;

		}

		public function setData($data){

			$this->data = $data;

		}

		public function getData(){

			return $this->data;

		}

		public function setSexo($sexo){

			$this->sexo = $sexo;

		}

		public function getSexo(){

			return $this->sexo;

		}

		public function setEmail($email){

			$this->email = $email;

		}

		public function getEmail(){

			return $this->email;

		}

		public function getTelefone(){

			return $this->telefone;

		}

		public function setTelefone($telefone){

			$this->telefone = $telefone;

		}


	}

?>