<?php
include '../modelo/Museo.php';
class InfoMuseo extends Museo{
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
			$img = '<img style="width:400px" class="img-responsive center-block" src=" '. $dato[4] .'" />';
			/*$mapa = '<iframe src="'. $dato[3] . '" width="100%" frameborder="0" allowfullscreen></iframe>';*/
			$obj[$i]= new Museo();
			$obj[$i]->inicializar(
				$dato[0],	
				$dato[1],	
				$dato[2],
				$dato[3],
				$img,
				$dato[5],
				$dato[6],
				$dato[7],
				$dato[8],
				$dato[9],
				$dato[10],
				$dato[11],
				$dato[12]
			);
		$i++;
		}
		return $obj;
	}

	
	public function getById($id){
		$this->con->close();
		$this->con->conectar();
		$stmt = "call getByIdMuseo(".$id.")";
		$obj = null;
		$query = $this->con->query($stmt);
		$dato = mysqli_fetch_array($query);
		if($dato)
		{
			$img = '<img style="width:400px" class="img-responsive center-block" src=" '. $dato[4] .'" />';
			$mapa = '<iframe src="'. $dato[3] . '" width="100%" frameborder="0" allowfullscreen></iframe>';
			$obj = new Museo();
			$obj->inicializar(
				$dato[0],	
				$dato[1],	
				$dato[2],
				$mapa,
				$img,
				$dato[5],
				$dato[6],
				$dato[7],
				$dato[8],
				$dato[9],
				$dato[10],
				$dato[11],
				$dato[12]
			);
		}
		return $obj;
	}

	public function insertar($us)
	{
		$this->con->close();
		$this->con->conectar();
		$stmt = "call museo_insertar('".
		$us."',".
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

	public function eliminar($us,$id)
	{
		$this->con->close();
		$this->con->conectar();
		$stmt = "call museo_eliminar('".$us."',"
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