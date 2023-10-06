<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    include_once "{$_SERVER['DOCUMENT_ROOT']}/BTTH04/app/services/SachService.php";
    include_once "{$_SERVER['DOCUMENT_ROOT']}/BTTH04/app/services/TacGiaService.php";
    class AdminController{
    
        public function editSach() {
            if(isset($_POST['submit_SachLuuLai'])){
                $sachService = new SachService();
                $check = $sachService->UpdateSach(new Sach($_POST['tenSach'], $_POST['namXuatBan'], $_POST['idTacGia'], $_POST['id']));
                $message = $check?"success":"lỗi không có idTacGia nào hoặc sai định dạng năm xuất bản yyyy/mm/tt";
                $type = $check?"success":"danger";
                header("location:http://localhost/BTTH04/public/index.php?message=$message&type=$type");exit();
            }
            else{
                echo "bạn chưa thực hiện editing sách";
            }
            
        }
        public function editTacGia() {
            if(isset($_POST['submit_TacGiaLuuLai'])){
                $tacGia = new TacGiaService();
                $check = $tacGia->UpdateTacGia(new TacGia( $_POST['tenTacGia'], $_POST['id']));
                $message = $check?"success":"error";
                $type = $check?"success":"danger";
                header("location:http://localhost/BTTH04/public/index.php?action=tacGia&message=$message&type=$type");exit();
            }
            else{
                echo "bạn chưa thực hiện editing";
            }
            
        }

        public function deleteSach(){
            $check = true;
            if(isset($_GET['idSach'])){
                $sachService = new SachService();
                $check = $sachService->DeleteSach($_GET['idSach']);
                
            }
            $message = $check?"success":"error";
                $type = $check?"success":"danger";
                header("location:http://localhost/BTTH04/public/index.php?message=$message&type=$type");exit();
        }
        public function deleteTacGia(){
            if(isset($_GET['idTacGia'])){
                $theLoaiService = new TacGiaService();
                $check = $theLoaiService->deleteTacGia($_GET['idTacGia']);
                $message = $check?"success":"error";
                $type = $check?"success":"danger";
                header("location:http://localhost/BTTH04/public/index.php?action=tacGia&message=$message&type=$type");exit();
            }
            else{
                echo "Bạn chưa thực hiện delete";
            }
        }
        public function insertSach(){
            if(isset($_POST['submit_insertSach'])){
                $sachService = new SachService();
                $check = $sachService->InserSach(new Sach($_POST['tenSach'], $_POST['namXuatBan'], $_POST['idTacGia']));
                $message = $check?"success":"lỗi không có idTacGia nào hoặc sai định dạng năm xuất bản yyyy/mm/tt";
                $type = $check?"success":"danger";
                header("location:http://localhost/BTTH04/public/index.php?message=$message&type=$type");exit();
            }
            else{
                echo "Bạn chưa thực hiện inserting";
            }
        }
        public function insertTacGia(){
            if(isset($_POST['submit_insertTacGia'])){
                $tacGiaService = new TacGiaService();
                $check = $tacGiaService->InsertTacGia( new TacGia($_POST['tenTacGia']) );
                $mes = $check?"success":"error";
                $message = $check?"success":"lỗi không có idTacGia nào hoặc sai định dạng năm xuất bản yyyy/mm/tt";
                $type = $check?"success":"danger";
                header("location:http://localhost/BTTH04/public/index.php?action=tacGia&message=$message&type=$type");exit();
            }
            else{
                echo "Bạn chưa thực hiện inserting";
            }
        }
    }

    
?>