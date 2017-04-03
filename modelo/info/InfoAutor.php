<?php
include '../modelo/Autor.php';
class InfoAutor extends Autor{
	private $con;

	public function __construct(){
		$this->con = new Conexion00();
		$this->con->conectar();
	}

	public function getAll(){
		$this->con->close();
		$this->con->conectar();
		$i = 0;
		$stmt = "call getAllAutor();";
		$obj = null;
		$query = $this->con->query($stmt);
		while ($dato = mysqli_fetch_array($query)) {
			
    		$img = '<img class="img-responsive center-block" src=" '. $dato[5] .'" />';

			$obj[$i]= new Autor();
			$obj[$i]->inicializar(
				$dato[0],	
				$dato[1],	
				$dato[2],
				$dato[3],
				$dato[4],
				$img,
				$dato[6]
			);
		$i++;
		}
		return $obj;
	}

	public function insertar($us)
	{
		$this->con->close();
		$this->con->conectar();
		$stmt = "call autor_insertar('".
		$us."','".
		$this->getNom()."','".
		$this->getApodo()."','".
		$this->getAppat()."','".
		$this->getApmat()."','".
		$this->getFoto()."','".
		$this->getDes()."');";

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
		$stmt = "call autor_eliminar('".$us."',"
		.$id.")";
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

	public function actualizar($usu)
	{
		$this->con->close();
		$this->con->conectar();
		
		$stmt = "call autor_actualizar('".
			$usu."',".
			$this->getId().",'".
			$this->getNom()."','".
			$this->getApodo()."','".
			$this->getAppat()."','". 
			$this->getApmat()."','". 
			$this->getFoto()."','". 
			$this->getDes()."')";
		$query = $this->con->query($stmt);
		if($query)
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