<?php
    include_once "{$_SERVER['DOCUMENT_ROOT']}/BTTH04/app/libs/MySql.php";
    include_once "{$_SERVER['DOCUMENT_ROOT']}/BTTH04/app/models/Sach.php";
    class SachService{
        public function getAllSachs(){
            $result = MySql::select("SELECT * FROM SACH order by id desc");
            $sachs = array();
            if($result != false){
                foreach($result as $row){
                    $sachs[] = new Sach($row['tenSach'],$row['namXuatBan'], $row['idTacGia'],$row['id']);
                }
            }
            return $sachs;
        }
        public function UpdateSach(Sach $sach){
            $id = $sach->getId();
            $tensach = $sach->getTensach();
            $namXuatBan = $sach->getNamXuatBan();
            $idTacGia = $sach->getIdTacGia();
            return MySql::Update("update sach set tensach = '$tensach', namXuatBan = '$namXuatBan', idTacGia = '$idTacGia' where id = '$id'");
        }
        public function InserSach($sach){
            $tenSach = $sach->getTensach();
            $namXuatBan = $sach->getNamXuatBan();
            $idTacGia = $sach->getIdTacGia();
            return MySql::Insert("INSERT INTO sach(tensach, namXuatBan, idTacGia) VALUES ('$tenSach', '$namXuatBan', '$idTacGia')");
        }
        public function DeleteSach($id){
            return MySql::Delete("delete from sach where id = '$id)'");
        }
    }