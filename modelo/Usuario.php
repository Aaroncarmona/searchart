<?php 
class Usuario{
	private $id;
	private $tuId;
	private $nom;
	private $app;
	private $username;
	private $password;


	function inicializar($id,$tuId,$nom,$app,$username,$password) {
		$this->id = $id;
		$this->tuId = $tuId;
		$this->nom = $nom;
		$this->app = $app;
		$this->username = $username;
		$this->password = $password;
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
     * Gets the value of tuId.
     *
     * @return mixed
     */
    public function getTuId()
    {
        return $this->tuId;
    }

    /**
     * Sets the value of tuId.
     *
     * @param mixed $tuId the tu id
     *
     * @return self
     */
    private function setTuId($tuId)
    {
        $this->tuId = $tuId;

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
     * Gets the value of app.
     *
     * @return mixed
     */
    public function getApp()
    {
        return $this->app;
    }

    /**
     * Sets the value of app.
     *
     * @param mixed $app the app
     *
     * @return self
     */
    private function setApp($app)
    {
        $this->app = $app;

        return $this;
    }

    /**
     * Gets the value of username.
     *
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Sets the value of username.
     *
     * @param mixed $username the username
     *
     * @return self
     */
    private function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Gets the value of password.
     *
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Sets the value of password.
     *
     * @param mixed $password the password
     *
     * @return self
     */
    private function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }
}
?>