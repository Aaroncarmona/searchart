<?php 
class Autor{
	private $id;
	private $nom;
	private $apodo;
	private $appat;
	private $apmat;
	private $foto;
	private $des;

    public function inicializar($id,$nom,$apodo,$appat,$apmat,$foto,$des)
    {
        $this->id = $id;
        $this->nom = $nom;
        $this->apodo = $apodo;
        $this->appat = $appat;
        $this->apmat = $apmat;
        $this->foto = $foto;
        $this->des = $des;
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
     * Gets the value of nom.
     *
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Sets the value of nom.
     *
     * @param mixed $nom the nom
     *
     * @return self
     */
    private function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Gets the value of apodo.
     *
     * @return mixed
     */
    public function getApodo()
    {
        return $this->apodo;
    }

    /**
     * Sets the value of apodo.
     *
     * @param mixed $apodo the apodo
     *
     * @return self
     */
    private function setApodo($apodo)
    {
        $this->apodo = $apodo;

        return $this;
    }

    /**
     * Gets the value of appat.
     *
     * @return mixed
     */
    public function getAppat()
    {
        return $this->appat;
    }

    /**
     * Sets the value of appat.
     *
     * @param mixed $appat the appat
     *
     * @return self
     */
    private function setAppat($appat)
    {
        $this->appat = $appat;

        return $this;
    }

    /**
     * Gets the value of apmat.
     *
     * @return mixed
     */
    public function getApmat()
    {
        return $this->apmat;
    }

    /**
     * Sets the value of apmat.
     *
     * @param mixed $apmat the apmat
     *
     * @return self
     */
    private function setApmat($apmat)
    {
        $this->apmat = $apmat;

        return $this;
    }

    /**
     * Gets the value of foto.
     *
     * @return mixed
     */
    public function getFoto()
    {
        return $this->foto;
    }

    /**
     * Sets the value of foto.
     *
     * @param mixed $foto the foto
     *
     * @return self
     */
    private function setFoto($foto)
    {
        $this->foto = $foto;

        return $this;
    }

    /**
     * Gets the value of des.
     *
     * @return mixed
     */
    public function getDes()
    {
        return $this->des;
    }

    /**
     * Sets the value of des.
     *
     * @param mixed $des the des
     *
     * @return self
     */
    private function setDes($des)
    {
        $this->des = $des;

        return $this;
    }
}

?>