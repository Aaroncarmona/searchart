<?php
include '../modelo/TipoUsuario.php';
class InfoTipoUsuario {
	private $con;

	public function __construct(){
		$this->con = new Conexion00();
		$this->con->conectar();
	}

	public function getAll(){
		$this->con->close();
		$this->con->conectar();
		$i = 0;
		$stmt = "call getAllTipoUsuario();";
		$obj = null;
		$query = $this->con->query($stmt);
		while ($dato = mysqli_fetch_array($query)) {
			$obj[$i]= new TipoUsuario();
			$obj[$i]->inicializar(
				$dato[0],	
				$dato[1],	
				$dato[2]
			);
		$i++;
		}
		return $obj;
	}

	public function getById($id){
		$this->con->close();
		$this->con->conectar();
		$stmt = "call getByIdTipoUsuario(".$id.");";
		$obj = null;
		$query = $this->con->query($stmt);
		if ($query) {
			$dato = mysqli_fetch_array($query);
			$obj= new TipoUsuario();
			$obj->inicializar(
				$dato[0],	
				$dato[1],	
				$dato[2]
			);
		}
		return $obj;
	}
}
?>