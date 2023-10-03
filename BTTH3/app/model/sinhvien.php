<?php
 class Sinhvien{
    private $id;
    private $name;
    private $email;
    private $birthday;
	private $idLop;
    public function __construct($id, $name, $email, $birthday,$idLop){
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->birthday = $birthday;
		$this->idLop = $idLop;
    }
 
	/**
	 * @return mixed
	 */
	public function getId() {
		return $this->id;
	}
	
	/**
	 * @param mixed $id 
	 * @return self
	 */
	public function setId($id): self {
		$this->id = $id;
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getName() {
		return $this->name;
	}
	
	/**
	 * @param mixed $name 
	 * @return self
	 */
	public function setName($name): self {
		$this->name = $name;
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getEmail() {
		return $this->email;
	}
	
	/**
	 * @param mixed $email 
	 * @return self
	 */
	public function setEmail($email): self {
		$this->email = $email;
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getBirthday() {
		return $this->birthday;
	}
	
	/**
	 * @param mixed $birthday 
	 * @return self
	 */
	public function setBirthday($birthday): self {
		$this->birthday = $birthday;
		return $this;
	}

	/**
	 * Get the value of idLop
	 */ 
	public function getIdLop()
	{
		return $this->idLop;
	}

	/**
	 * Set the value of idLop
	 *
	 * @return  self
	 */ 
	public function setIdLop($idLop)
	{
		$this->idLop = $idLop;

		return $this;
	}
}