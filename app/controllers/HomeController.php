<?php
    include_once "{$_SERVER['DOCUMENT_ROOT']}/BTTH04/app/services/SachService.php";
    include_once "{$_SERVER['DOCUMENT_ROOT']}/BTTH04/app/services/TacGiaService.php";
    class HomeController{
        public function index() {
           $sachService = new SachService();
           $dataSachs = $sachService->getAllSachs();
           include_once "{$_SERVER['DOCUMENT_ROOT']}/BTTH04/app/views/Home/index.php";
        }
        public function tacGia() {
            $tacGiaService = new TacGiaService();
           $dataTacGias = $tacGiaService->getAllSachs();
           include_once "{$_SERVER['DOCUMENT_ROOT']}/BTTH04/app/views/Home/tacGia.php";
        }
    }

    
?>