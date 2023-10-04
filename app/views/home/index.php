<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hệ thống quản lý bệnh viện</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <!-- index này sẽ được gọi ở homecontroller -->
    <div class="container">
        <h3 class="text-center tex-uppercase text-success py-2">Quản lý bệnh nhân</h3>
        <button type="button" class="btn btn-success"><a class="text-decoration-none text-white" href="<?= DOMAIN. '/app/views/patient/addPatient.php'?>">Thêm mới </a></button>
        <!--  dungf domain de dieu huong web vi app-root la duong dan tuyet doi tren may minh-->
        <table class="table">
            <thead>
                <tr>
                <th scope="col">Mã bệnh nhân</th>
                <th scope="col">Họ và tên</th>
                <th scope="col">Giới tính</th>
                <th scope="col">Ngày sinh</th>
                <th scope="col">Địa chỉ</th>
                <th scope="col">Điện thoại</th>
                <th scope="col">Sửa</th>
                <th scope="col">Xóa</th>

                </tr>
            </thead>
            <tbody>
                <?php 
                    foreach($patients as $patient){ // lấy ra phần tử trong mảng , lặp để echo ra dữ liệu
                    ?> 
                    <tr>
                        <th scope="row"><?= $patient->getId(); ?></th>
                        
                        <td><?=  $patient->getFullname();?></td>
                        <td><?=  $patient->getGender();?></td>
                        <td><?=  $patient->getDateOfBirth()?></td>
                        <td><?=  $patient->getAddress();?></td>
                        <td><?=  $patient->getMobile();?></td>
                        <td><a href="<?=DOMAIN.'/app/views/patient/editPatient.php?id='.$patient->getID(); ?>"><i class="bi bi-pencil-square text-black "></i></a></td>
                        <!-- noi chuoi de hiu la bien -->
                        <td><a href=""><i class="bi bi-trash3 text-black"></i></a></td>

                </tr>
                <?php }?>
            </tbody>
        </table>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>