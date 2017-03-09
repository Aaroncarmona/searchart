<?php
include '../modelo/Museo.php';
class InfoMuseo{
	private $con;

	public function __construct(){
		$this->con = new Conexion00();
		$this->con->conectar();
	}

	public function getAll(){
		$i = 0;
		$stmt = "call getAllMuseo();";
		$obj = null;
		$query = $this->con->query($stmt);
		while ($dato = mysqli_fetch_array($query)) {
			$obj[$i]= new Museo();
			$obj[$i]->inicializar(
				$dato[0],	
				$dato[1],	
				$dato[2],
				$dato[3],
				$dato[4],
				$dato[5],
				$dato[6],
				$dato[7],
				$dato[8],
				$dato[9],
				$dato[10],
				$dato[11],
				$dato[12],
				$dato[13]
			);
		$i++;
		}
		return $obj;
	}

	public function getById($id){
		$i = 0;
		$stmt = "call getByIdMuseo(".$id.");";
		$obj = null;
		$query = $this->con->query($stmt);
		while ($dato = mysqli_fetch_array($query)) {
			$obj[$i]= new Museo();
			$obj[$i]->inicializar(
				$dato[0],	
				$dato[1],	
				$dato[2],
				$dato[3],
				$dato[4],
				$dato[5],
				$dato[6],
				$dato[7],
				$dato[8],
				$dato[9],
				$dato[10],
				$dato[11],
				$dato[12],
				$dato[13]
			);
		$i++;
		}
		return $obj;
	}

	public function countMuseo(){
		$count = 0;
		$stmt = "call countMuseo();";
		$query = $this->con->query($stmt);
		if ($dato = mysqli_fetch_array($query)) {
			$count = $dato[0];
		}
		return $count;
	}	
}
?>