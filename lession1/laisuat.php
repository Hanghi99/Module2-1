<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action=" ">
    <table border=1 >
        <tr>
        <td>Giá trị hiện tại : </td>
        <td> <input type="text" name="InventmentAmount"/></td>
        </tr>
        <tr>
            <td>Lãi xuất năm :</td>
        <td> <input type="text" name="YearlyInterestRate"/></td>

    </tr>
        <tr>
            <td>Số năm đầu tư:</td>
            <td><input type="text" name="NumberofYears"/></td>
    </tr>
    <!-- <tr>
        <td>Giá trị tương lai :</td>
        <td><input type="text" name="tientuonglai"></td>
    </tr> -->
    <tr><td colspan="2" style="text-align: center;"> <input type="submit" value="submit" name="tuonglai" style="background-color: #FF7F50; border-radius:20px;" /></td></tr>
    </table>
</body>
</html>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Amount = $_POST["InventmentAmount"];
    $Yearly = $_POST["YearlyInterestRate"];
    $Years = $_POST["NumberofYears"];
    
    echo '<pre>';
		print_r($_REQUEST); //in ra biến hoặc mảng, ko kèm kiểu dữ liệu
	echo '</pre>';

	if ($Amount == "")
    {
        echo "Vui lòng nhập số tiền ban đầu vào đây !";
    }
    if ($Yearly == "")
    {
        echo "Vui lòng nhập lãi suất đầu vào đây !";
    }
    if ($Years == "")
    {
        echo "Vui lòng nhập thời hạn gửi vào đây !";
    }
    if ($Amount != "" &&  $Yearly != "" && $Years!="" )
    {
        $total = (int)$Amount+(((int)$Amount * (float)$Yearly)/100 );
        echo $total;
    }
} 
