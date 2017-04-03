<?php
include '../modelo/Delegacion.php';
class InfoDelegacion extends Delegacion{
	private $con;

	public function __construct(){
		$this->con = new Conexion00();
		$this->con->conectar();
	}

	public function getAll(){
		$this->con->close();
		$this->con->conectar();
		$i = 0;
		$stmt = "call getAllDelegacion();";
		$obj = null;
		$query = $this->con->query($stmt);
		while ($dato = mysqli_fetch_array($query)) {
			$obj[$i]= new Delegacion();
			$obj[$i]->inicializar(
				$dato[0],	
				$dato[1]
			);
		$i++;
		}
		return $obj;
	}

	public function getById($id){
		$this->con->close();
		$this->con->conectar();
		$stmt = "call getByIdDelegacion(".$id.")";
		$obj = null;
		$query = $this->con->query($stmt);
		$dato = mysqli_fetch_array($query);
		if($dato)
		{
			$obj = new Delegacion();
			$obj->inicializar(
				$dato[0],
				$dato[1]
			);
		}
		return $obj;
	}
}
?>