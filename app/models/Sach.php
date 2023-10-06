<?php

    class Sach{
        private $id;
        private $tenSach;
        private $nameXuatBan;
        private $idTacGia;

        public function __construct($tenSach, $nameXuatBan, $idTacGia, $id = null){
            $this->tenSach = $tenSach;
            $this->nameXuatBan = $nameXuatBan;
            $this->idTacGia = $idTacGia;
            $this->id = $id;
        }
        // getter
        public function getId(){
            return $this->id;
        }
        public function setId($id){
            $this->id = $id;
        }
        public function getTenSach(){
            return $this->tenSach;
        }
        public function setTenSach($tenSach){
            $this->tenSach = $tenSach;
        }
        public function getNamXuatBan(){
            return $this->nameXuatBan;
        }
        public function setNameXuatBan($nameXuatBan){
            $this->nameXuatBan = $nameXuatBan;
        }
        public function getIdTacGia(){
            return $this->idTacGia;
        }
        public function setIdTacGia($idTacGia){
            $this->idTacGia = $idTacGia;
        }
    }