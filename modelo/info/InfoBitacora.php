<?php
include '../modelo/Bitacora.php';
class InfoBitacora{
	private $con;

	public function __construct(){
		$this->con = new Conexion00();
		$this->con->conectar();
	}

	public function getAll(){
		$i = 0;
		$stmt = "call getAllBitacora();";
		$obj = null;
		$query = $this->con->query($stmt);
		while ($dato = mysqli_fetch_array($query)) {
			$obj[$i]= new Bitacora();
			$obj[$i]->inicializar(
				$dato[0],	
				$dato[1],	
				$dato[2],
				$dato[3],
				$dato[4]
			);
		$i++;
		}
		return $obj;
	}
}
?>