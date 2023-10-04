<?php 
    require_once APP_ROOT. '/app/services/PatientService.php';  
    class HomeController{
        public function index(){ // hàm được gọi tương ứng với lời gọi trên chang chủ
            // Goi du lieu tu PatientServive 
            $patientService = new PatientService();
            $patients = $patientService->getAllPatient();

            // để Render du lieu lay ra HomePage
            include APP_ROOT.'/app/views/home/index.php';
            // gọi ra víews để lấy dữ liệu từ service trả về 
        }
    }
?>