<?php
class Author{
    private $ma_tgia;
    private $ten_tgia;
    private $hinh_tgia;

    public function __construct($ma_tgia,$ten_tgia,$hinh_tgia){
        $this->ma_tgia = $ma_tgia;
        $this->ten_tgia = $ten_tgia;
        $this->hinh_tgia = $hinh_tgia;
    }

	/**
	 * @return mixed
	 */
	public function getMa_tgia() {
		return $this->ma_tgia;
	}
	
	/**
	 * @param mixed $ma_tgia 
	 * @return self
	 */
	public function setMa_tgia($ma_tgia): self {
		$this->ma_tgia = $ma_tgia;
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getTen_tgia() {
		return $this->ten_tgia;
	}
	
	/**
	 * @param mixed $ten_tgia 
	 * @return self
	 */
	public function setTen_tgia($ten_tgia): self {
		$this->ten_tgia = $ten_tgia;
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getHinh_tgia() {
		return $this->hinh_tgia;
	}
	
	/**
	 * @param mixed $hinh_tgia 
	 * @return self
	 */
	public function setHinh_tgia($hinh_tgia): self {
		$this->hinh_tgia = $hinh_tgia;
		return $this;
	}
}
?>