<?php
include_once './employee.php';

$employee =[];
$employee1 = new Employee('Đặng', 'Phương Khanh' ,'08/04/1995' ,'TT Huế' ,'Trưởng phòng kinh doanh');
$employee2 = new Employee('Nguyễn', 'Thái Hiếu' ,'27/07/1993' ,'Quảng Ngãi' ,'Trưởng phòng kỹ thuật');
$employee3 = new Employee('Trần', 'Cẩm Lan' ,'10/06/1989' ,'Đà Nẵng' ,'Trưởng phòng kế toán');

 
//  Hiển thị danh sách nhân sự
 $employee[] = $employee1;
 $employee[] = $employee2;
 $employee[] = $employee3;
 
//  Xem chi tiết thông tin nhân sự
echo "<pre>";
 print_r ($employee);
 echo "</pre>";
// xóa 1 nhân sự 
 unset($employee[1]);

 echo "<pre>";
 print_r ($employee);
 echo "</pre>";
//  Chỉnh sửa thông tin nhân sự
 $employee2->setHo("Nguyễn");
 $employee2->setTen("Thái Hiếu");
 $employee2->setBirth("27/08/1993");
 $employee2->setAddress("Quảng Ngãi");
 $employee2->setJob_position("Trưởng phòng kỹ thuật");
 
 echo "<pre>";
 print_r ($employee2);
 echo "</pre>";


