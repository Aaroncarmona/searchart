<?php
include '../modelo/Usuario.php';
class InfoUsuario{
	private $con;

	public function __construct(){
		$this->con = new Conexion00();
		$this->con->conectar();
	}

	public function getAll(){
		$this->con->close();
		$this->con->conectar();
		$i = 0;
		$stmt = "call getAllUsuario();";
		$obj = null;
		$query = $this->con->query($stmt);
		while ($dato = mysqli_fetch_array($query)) {
			$obj[$i]= new Usuario();
			$obj[$i]->inicializar(
				$dato[0],	
				$dato[1],	
				$dato[2],
				$dato[3],
				$dato[4],
				$dato[5]
			);
		$i++;
		}
		return $obj;
	}

	public function getById($id){
		$this->con->close();
		$this->con->conectar();
		$stmt = "call getByIdUsuario(".$id.");";
		$obj = null;
		$query = $this->con->query($stmt);
		if ($query) {
			$dato = mysqli_fetch_array($query);
			$obj= new Usuario();
			$obj->inicializar(
				$dato[0],	
				$dato[1],	
				$dato[2],
				$dato[3],
				$dato[4],
				$dato[5]
			);
		}
		return $obj;
	}

	public function iniciarSesion($usu,$pass){
		$this->con->close();
		$this->con->conectar();
		$numero = -1;
		$stmt = "call login('$usu','$pass');";
		$query = $this->con->query($stmt);
		if ( $query ) {
			$dato = mysqli_fetch_array($query);
			$numero = $dato[0];
		}
		return $numero;
	}

}
?>