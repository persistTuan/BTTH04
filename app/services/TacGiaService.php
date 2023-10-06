<?php
    include_once "{$_SERVER['DOCUMENT_ROOT']}/BTTH04/app/libs/MySql.php";
    include_once "{$_SERVER['DOCUMENT_ROOT']}/BTTH04/app/models/TacGia.php";
    class TacGiaService{
        public function getAllSachs(){
            $result = MySql::select("SELECT * FROM TacGia order by id desc");
            $tacGias = array();
            if($result != false){
                foreach($result as $row){
                    $tacGias[] = new TacGia($row['tenTacGia'],$row['id']);
                }
            }
            return $tacGias;
        }
        public function UpdateTacGia(TacGia $tacGia){
           $id = $tacGia->getId();
            $tenTacGia = $tacGia->getTenTacGia();
            return MySql::Update("update tacgia set tentacGia = '$tenTacGia' where id = '$id'");
        }
        public function InsertTacGia($tacGia){
            $tenTacGIa = $tacGia->getTenTacGia();
            return MySql::Insert("INSERT INTO tacgia(tenTacGia) VALUES ('$tenTacGIa')");
        }
        public function DeleteTacGia($id){
            return MySql::Delete("delete from tacgia where id = '$id'");
        }
    }