<?php 
class TipoUsuario
{
	private $id;
	private $niv;
	private $nom;

	public function inicializar($id,$niv,$nom)
	{
		$this->id = $id;
		$this->niv = $niv;
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
     * Gets the value of niv.
     *
     * @return mixed
     */
    public function getNiv()
    {
        return $this->niv;
    }

    /**
     * Sets the value of niv.
     *
     * @param mixed $niv the niv
     *
     * @return self
     */
    private function setNiv($niv)
    {
        $this->niv = $niv;

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