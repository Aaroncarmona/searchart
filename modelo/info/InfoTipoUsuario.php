<?php
include '../modelo/TipoUsuario.php';
class InfoTipoUsuario{
	private $con;

	public function __construct(){
		$this->con = new Conexion00();
		$this->con->conectar();
	}

	public function getAll(){
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