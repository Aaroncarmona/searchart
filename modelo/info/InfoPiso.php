<?php
include '../modelo/Piso.php';
class InfoPiso extends Piso{
	private $con;

	public function __construct(){
		$this->con = new Conexion00();
		$this->con->conectar();
	}

	public function getByMusId($musid){
		$this->con->close();
		$this->con->conectar();
		$i = 0;
		$stmt = "call getByMusIdPiso(".$musid.");";
		$obj = null;
		$query = $this->con->query($stmt);
		while ($dato = mysqli_fetch_array($query)) {
			$obj[$i]= new Piso();
			$obj[$i]->inicializar(
				$dato[0],	
				$dato[1],	
				$dato[2]
			);
		$i++;
		}
		return $obj;
	}

	public function insertar($us)
	{
		$this->con->close();
		$this->con->conectar();
		$stmt = "call piso_insertar('".
		$us."',".
		$this->getMusId().",'".
		$this->getNom()."');";
		echo $stmt;
		$query = $this->con->query($stmt);
		if( $query )
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	public function eliminar($us,$id)
	{
		$this->con->close();
		$this->con->conectar();
		$stmt = "call piso_eliminar('".$us."',"
		.$id.");";
		$query = $this->con->query($stmt);
		if( $query )
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	public function actualizar($us)
	{
		$this->con->close();
		$this->con->conectar();
		$stmt = "call piso_actualizar('".
		$us."',".
		$this->getId().",'".
		$this->getNom()."');";
		$query = $this->con->query($stmt);
		if( $query )
		{
			return true;
		}
		else
		{
			return false;
		}
	}
}
?>