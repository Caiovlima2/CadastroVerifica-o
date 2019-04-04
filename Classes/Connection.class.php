<?php 

	include_once "../Actions/config.action.php";

	class Connection{

		public $con;

		function __construct(){

			try{

				$this->con = mysqli_connect(host, user, pass, bd);

				
			} catch (Exception $e) {
				
			}

		}

		function __destruct(){

			if(mysqli_connect_errno() == 0)
				mysqli_close($this->con);
		}

	}

?>