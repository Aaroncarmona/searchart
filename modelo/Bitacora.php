<?php 
class Bitacora{
	private $id;
	private $usu;
	private $tabla;
	private $tran;
    private $desc;
	private $fecha;

	function inicializar($id, $usu, $tabla , $tran , $desc , $fecha) {
        $this->id = $id;
        $this->usu = $usu;
        $this->tabla = $tabla;
        $this->tran = $tran;
        $this->desc = $desc;
        $this->fecha = $fecha;
    }
    
    /**
     * Gets the value of id.
     *
     * @return mixed
     */
    public function getDesc()
    {
        return $this->desc;
    }

    /**
     * Sets the value of id.
     *
     * @param mixed $id the id
     *
     * @return self
     */
    private function setDesc($desc)
    {
        $this->desc = $desc;

        return $this;
    }

    /**
     * Gets the value of id.
     *
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets the value of id.
     *
     * @param mixed $id the id
     *
     * @return self
     */
    private function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Gets the value of usu.
     *
     * @return mixed
     */
    public function getUsu()
    {
        return $this->usu;
    }

    /**
     * Sets the value of usu.
     *
     * @param mixed $usu the usu
     *
     * @return self
     */
    private function setUsu($usu)
    {
        $this->usu = $usu;

        return $this;
    }

    /**
     * Gets the value of tabla.
     *
     * @return mixed
     */
    public function getTabla()
    {
        return $this->tabla;
    }

    /**
     * Sets the value of tabla.
     *
     * @param mixed $tabla the tabla
     *
     * @return self
     */
    private function setTabla($tabla)
    {
        $this->tabla = $tabla;

        return $this;
    }

    /**
     * Gets the value of tran.
     *
     * @return mixed
     */
    public function getTran()
    {
        return $this->tran;
    }

    /**
     * Sets the value of tran.
     *
     * @param mixed $tran the tran
     *
     * @return self
     */
    private function setTran($tran)
    {
        $this->tran = $tran;

        return $this;
    }

    /**
     * Gets the value of fecha.
     *
     * @return mixed
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Sets the value of fecha.
     *
     * @param mixed $fecha the fecha
     *
     * @return self
     */
    private function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }
}
?>