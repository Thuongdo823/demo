<?php 
    require_once('../app/config/config.php');
    require_once APP_ROOT. '/app/libs/DBConnection.php';
    // echo APP_ROOT;

    // require_once APP_ROOT. '/app/controllers/HomeController.php'; // index chaỵ đầu tiên sẽ gọi đến config để hiểu xem app_root là cái gì sau đó dùng app root để gọi link đó 
    // $homeController = new HomeController(); // ddi thi thi neu k kip hay hoi ra cai nay de lay diem
    // $homeController->index();

    $controller = isset($_GET['controller'])?$_GET['controller']:'home';
    $action = isset($_GET['action'])?$_GET['action']:'index';

    if($controller == 'home'){
        require_once APP_ROOT. '/app/controllers/HomeController.php'; // index chaỵ đầu tiên sẽ gọi đến config để hiểu xem app_root là cái gì sau đó dùng app root để gọi link đó 
        $homeController = new HomeController(); // ddi thi thi neu k kip hay hoi ra cai nay de lay diem
        $homeController->index();
    }
    // else if($controller == 'patient'){
    //     require_once APP_ROOT. '/app/controllers/PatientController.php'; // index chaỵ đầu tiên sẽ gọi đến config để hiểu xem app_root là cái gì sau đó dùng app root để gọi link đó 
    //     $patientController = new PatientController(); // ddi thi thi neu k kip hay hoi ra cai nay de lay diem
    //     $patientController->index();
    // }
    else{
        echo 'Khong ton tai';
    }
