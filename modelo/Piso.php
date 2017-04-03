<?php 
	class Piso{
		private $id;
		private $musId;
		private $nom;
	
	public function inicializar($id,$musId,$nom){
		$this->id = $id;
		$this->musId = $musId;
		$this->nom = $nom;
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
     * Gets the value of musId.
     *
     * @return mixed
     */
    public function getMusId()
    {
        return $this->musId;
    }

    /**
     * Sets the value of musId.
     *
     * @param mixed $musId the mus id
     *
     * @return self
     */
    private function setMusId($musId)
    {
        $this->musId = $musId;

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
}
?>