<?php 
class Sala{
	private $id;
	private $pisId;
	private $nom;

	public function inicializar($id,$pisId,$nom){
		$this->id = $id;
		$this->pisId = $pisId;
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
     * Gets the value of pisId.
     *
     * @return mixed
     */
    public function getPisId()
    {
        return $this->pisId;
    }

    /**
     * Sets the value of pisId.
     *
     * @param mixed $pisId the pis id
     *
     * @return self
     */
    private function setPisId($pisId)
    {
        $this->pisId = $pisId;

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