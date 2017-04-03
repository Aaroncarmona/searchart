<?php
include '../modelo/Sala.php';
class InfoSala extends Sala{
	private $con;

	public function __construct(){
		$this->con = new Conexion00();
		$this->con->conectar();
	}

	public function getByPisoId($pisoId){
		$this->con->close();
		$this->con->conectar();
		$i = 0;
		$stmt = "call getByPisoIdSala(".$pisoId.");";
		$obj = null;
		$query = $this->con->query($stmt);
		while ($dato = mysqli_fetch_array($query)) {
			$obj[$i]= new Sala();
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
		$stmt = "call sala_insertar('".
		$us."',".
		$this->getPisId().",'".
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
/*
	

	public function actualizar($us)
	{
		$this->con->close();
		$this->con->conectar();
		$stmt = "call museo_actualizar('".
		$us."',".
		$this->getId().",".
		$this->getDelId().",'".
		$this->getNom()."','".
		$this->getMap()."','".
		$this->getFoto()."','".
		$this->getTel()."','".
		$this->getCyn()."','".
		$this->getDes()."','".
		$this->getCp()."','".
		$this->getHori()."','".
		$this->getHorf()."',".
		$this->getCos().",".
		$this->getSt().");";
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
*/
	public function eliminar($us,$id)
	{
		$this->con->close();
		$this->con->conectar();
		$stmt = "call sala_eliminar('".$us."',"
		.$id.")";
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