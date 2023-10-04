<?php 
// require_once APP_ROOT. '/app/libs/DBConnection.php';
require_once APP_ROOT. '/app/models/Patient.php';
    class PatientService{
        public function getAllPatient(){
            // 1. Kết nối Database
                $dbConnection = new DBConnection();
                $conn = $dbConnection->getConnection();
                if($conn !=null){
        // 2 truy van
                    $sql = 'SELECT * FROM patients ORDER BY id DESC';
                    $stmt = $conn->query($sql);// $stmt la 1 opject

                    // 3 xu ly ket qua
                    $patients = [];
                    while($row = $stmt->fetch()){ // mỗi lần lặp lấy ra 1 bản ghi
                        $patient = new Patient($row['id'],$row['fullname'], $row['gender'], $row['dateOfBirth'],$row['address'], $row['mobile']); // chuyển đổi một bản ghi dạng mảng thông thường sang đối tượng bệnh nhân để đưa đóoi tượng bệnh nhân này vào mảng bệnh nhân đã định nghĩa trước đó
                        $patients[] = $patient;
            }
            return $patients;
            }
        }
        
    }
?>