<?PHP
	class bd
	{
		
		
	private $host = 'localhost';
	private $usuario ='root';
	private $senha = '';
	private $database = 'licao4';

	public function conecta_bd(){

		

		$con = mysqli_connect($this->host, $this->postl4, $this->senha, $this->database);
		
		mysqli_set_charset($con, 'utf8');


		//ver se averá erros

			if(mysqli_connect_errno()){
				echo "Erro 1001";
				die();
			}

			return $con;
			
		}
	}
?>