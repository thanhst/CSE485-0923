<?php 
class Student{
    private $id;
    private $arrayName = array();

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
    public function __construct($id){
        array_push($this->arrayName, $id);
    }
    public function __addArrayName($arrayName)
    {
        $this->arrayName[] = $arrayName;
    }
}

?>