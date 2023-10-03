<?php
class TheLoai{
    private $id;
    private $tenBaiHat;
    private $caSi;
    private $idTheLoai;
    
    public function __construct($id,$tenBaiHat,$caSi,$idTheLoai){
        $this->id = $id;
        $this->tenBaiHat = $tenBaiHat;
        $this->caSi = $caSi;
        $this->idTheLoai = $idTheLoai;

    }

    public function getId(){
        return $this->id;
    }
    public function gettenBaiHat(){
        return $this->TenTheLoai;
    }

    public function getcaSi(){
        return $this->caSi;
    }
    
    public function setId($id){
        $this->id = $id;
    }
    public function settenBaiHat($tenBaiHat){
        $this->tenBaiHat = $tenBaiHat;
    }

    public function setcaSi($caSi){
        $this->caSi = $caSi;
    }

    public function setidTheLoai($idTheLoai){
        $this->idTheLoai = $idTheLoai;
    }
}

?>