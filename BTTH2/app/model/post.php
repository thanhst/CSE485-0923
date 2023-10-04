<?php 
class Post{
    private $ma_bviet;
    private $tieude;
    private $ten_bhat;
    private $ma_tloai;
    private $tomtat;
    private $noidung;
    private $ma_tgia;
    private $ngayviet;
    private $hinhanh;
    
    public function __construct($ma_bviet,$tieude,$ten_bhat,$ma_tloai,$tomtat,$noidung,$ma_tgia,$ngayviet,$hinhanh){
        $this->ma_bviet = $ma_bviet;
        $this->tieude = $tieude;
        $this->ten_bhat = $ten_bhat; 
        $this->ma_tloai = $ten_bhat;
        $this->tomtat = $tomtat;
        $this->noidung = $noidung;
        $this->ma_tgia = $ma_tgia;
        $this->ngayviet = $ngayviet;
        $this->hinhanh = $hinhanh;
    }
    

	/**
	 * @return mixed
	 */
	public function getMa_bviet() {
		return $this->ma_bviet;
	}
	
	/**
	 * @param mixed $ma_bviet 
	 * @return self
	 */
	public function setMa_bviet($ma_bviet): self {
		$this->ma_bviet = $ma_bviet;
		return $this;
	}

    /**
     * Get the value of tieude
     */ 
    public function getTieude()
    {
        return $this->tieude;
    }

    /**
     * Set the value of tieude
     *
     * @return  self
     */ 
    public function setTieude($tieude)
    {
        $this->tieude = $tieude;

        return $this;
    }

    /**
     * Get the value of ten_bhat
     */ 
    public function getTen_bhat()
    {
        return $this->ten_bhat;
    }

    /**
     * Set the value of ten_bhat
     *
     * @return  self
     */ 
    public function setTen_bhat($ten_bhat)
    {
        $this->ten_bhat = $ten_bhat;

        return $this;
    }

    /**
     * Get the value of ma_tloai
     */ 
    public function getMa_tloai()
    {
        return $this->ma_tloai;
    }

    /**
     * Set the value of ma_tloai
     *
     * @return  self
     */ 
    public function setMa_tloai($ma_tloai)
    {
        $this->ma_tloai = $ma_tloai;

        return $this;
    }

    /**
     * Get the value of tomtat
     */ 
    public function getTomtat()
    {
        return $this->tomtat;
    }

    /**
     * Set the value of tomtat
     *
     * @return  self
     */ 
    public function setTomtat($tomtat)
    {
        $this->tomtat = $tomtat;

        return $this;
    }

	/**
	 * @return mixed
	 */
	public function getNoidung() {
		return $this->noidung;
	}
	
	/**
	 * @param mixed $noidung 
	 * @return self
	 */
	public function setNoidung($noidung): self {
		$this->noidung = $noidung;
		return $this;
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
	public function getNgayviet() {
		return $this->ngayviet;
	}
	
	/**
	 * @param mixed $ngayviet 
	 * @return self
	 */
	public function setNgayviet($ngayviet): self {
		$this->ngayviet = $ngayviet;
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getHinhanh() {
		return $this->hinhanh;
	}
	
	/**
	 * @param mixed $hinhanh 
	 * @return self
	 */
	public function setHinhanh($hinhanh): self {
		$this->hinhanh = $hinhanh;
		return $this;
	}
}