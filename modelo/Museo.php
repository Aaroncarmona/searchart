<?php 
class Museo{
    private $id;   
    private $delId;   
    private $nom;  
    private $map;  
    private $foto; 
    private $tel;  
    private $cyn;  
    private $des;  
    private $cp;   
    private $hori; 
    private $horf; 
    private $cos;  
    private $st;	

    public function inicializar($id,$delId,$nom,$map,$foto,$tel,$cyn,$des,$cp,$hori,$horf,$cos,$st){
        $this->id=$id;
        $this->delId=$delId;
        $this->nom=$nom;
        $this->map=$map;
        $this->foto=$foto;
        $this->tel=$tel;
        $this->cyn=$cyn;
        $this->des=$des;
        $this->cp=$cp;
        $this->hori=$hori;
        $this->horf=$horf;
        $this->cos=$cos;
        $this->st=$st;
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
     * Gets the value of delId.
     *
     * @return mixed
     */
    public function getDelId()
    {
        return $this->delId;
    }

    /**
     * Sets the value of delId.
     *
     * @param mixed $delId the del id
     *
     * @return self
     */
    private function setDelId($delId)
    {
        $this->delId = $delId;

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
     * Gets the value of map.
     *
     * @return mixed
     */
    public function getMap()
    {
        return $this->map;
    }

    /**
     * Sets the value of map.
     *
     * @param mixed $map the map
     *
     * @return self
     */
    private function setMap($map)
    {
        $this->map = $map;

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
     * Gets the value of tel.
     *
     * @return mixed
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Sets the value of tel.
     *
     * @param mixed $tel the tel
     *
     * @return self
     */
    private function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }

    /**
     * Gets the value of cyn.
     *
     * @return mixed
     */
    public function getCyn()
    {
        return $this->cyn;
    }

    /**
     * Sets the value of cyn.
     *
     * @param mixed $cyn the cyn
     *
     * @return self
     */
    private function setCyn($cyn)
    {
        $this->cyn = $cyn;

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

    /**
     * Gets the value of cp.
     *
     * @return mixed
     */
    public function getCp()
    {
        return $this->cp;
    }

    /**
     * Sets the value of cp.
     *
     * @param mixed $cp the cp
     *
     * @return self
     */
    private function setCp($cp)
    {
        $this->cp = $cp;

        return $this;
    }

    /**
     * Gets the value of hori.
     *
     * @return mixed
     */
    public function getHori()
    {
        return $this->hori;
    }

    /**
     * Sets the value of hori.
     *
     * @param mixed $hori the hori
     *
     * @return self
     */
    private function setHori($hori)
    {
        $this->hori = $hori;

        return $this;
    }

    /**
     * Gets the value of horf.
     *
     * @return mixed
     */
    public function getHorf()
    {
        return $this->horf;
    }

    /**
     * Sets the value of horf.
     *
     * @param mixed $horf the horf
     *
     * @return self
     */
    private function setHorf($horf)
    {
        $this->horf = $horf;

        return $this;
    }

    /**
     * Gets the value of cos.
     *
     * @return mixed
     */
    public function getCos()
    {
        return $this->cos;
    }

    /**
     * Sets the value of cos.
     *
     * @param mixed $cos the cos
     *
     * @return self
     */
    private function setCos($cos)
    {
        $this->cos = $cos;

        return $this;
    }

    /**
     * Gets the value of st.
     *
     * @return mixed
     */
    public function getSt()
    {
        return $this->st;
    }

    /**
     * Sets the value of st.
     *
     * @param mixed $st the st
     *
     * @return self
     */
    private function setSt($st)
    {
        $this->st = $st;

        return $this;
    }
}
?>
