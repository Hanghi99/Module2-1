<?php
	require './display_discount.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
    <table border=1>
        <tr>
            <td>Mô tả sản phẩm :</td>
            <td><textarea name="mota" cols="30" rows="10"></textarea></td>
        </tr>
        <tr>
            <td>Giá niêm yết của sản phẩm :</td>
            <td><input type="text" name="ListPrice" required/></td>
        </tr>
        <tr>
            <td>Tỷ lệ chiết khấu :</td>
            <td><input type="text" name="DiscountPercent" required/></td>
        </tr>
        <tr>
            <td><input type="submit" value="submit"></td>
        </tr>
    </table>
</form>
</body>
</html>