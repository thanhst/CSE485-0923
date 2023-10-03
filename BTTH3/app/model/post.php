<?php
 class Post{
    private $id;
    private $name;
    private $author;
    private $idCategory;
    public function __construct($id, $name, $author, $idCategory){
        $this->id = $id;
        $this->name = $name;
        $this->author = $author;
        $this->idCategory = $idCategory;
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
	public function getAuthor() {
		return $this->author;
	}
	
	/**
	 * @param mixed $author 
	 * @return self
	 */
	public function setAuthor($author): self {
		$this->author = $author;
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getIdCategory() {
		return $this->idCategory;
	}
	
	/**
	 * @param mixed $idCategory 
	 * @return self
	 */
	public function setIdCategory($idCategory): self {
		$this->idCategory = $idCategory;
		return $this;
	}
}