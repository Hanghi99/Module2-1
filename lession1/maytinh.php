<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $number1 =$_POST['giatri1'];
    
    $pheptinh = $_POST['toantu'];
    $number2 =$_POST['giatri2'];
  if ($pheptinh=='+'&& $number1!="" && $number2!=""){
      $result = $number1 + $number2;
      echo $result;}
      if($pheptinh=='-'&& $number1!="" && $number2!=""){
          $result= $number1 - $number2;
          echo $result;
      }
      if($pheptinh=='*'&& $number1!="" && $number2!=""){
        $result= $number1 * $number2;
        echo $result;
    }
    if($pheptinh=='/'&& $number1!="" && $number2!=""){
        if($number2==0){
            echo $result = "Lỗi. vui lòng thử lại";
        }
       else{
            $result= $number1 / $number2;

        echo $result;
      }

    }
    


    
}
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
        <table border=1 >
            <tr><td colspan=2><h2>Simple Calculator</h2></td></tr>
            <tr>
                <td>First operand:</td>
                <td><input type="text" name="giatri1"/></td>

                </tr>
            <tr>
                <td>Operator:</td>
                <td> <select name='toantu'> 
                    <option >+</option>
                    <option >-</option>
                    <option >*</option>
                    <option >/</option>
                    </select> 
            </td>
           
        </tr>
            <tr>
                <td>Second operand:</td>
        <td><input type="text" name='giatri2'></td>
    </tr>
            <tr>
                <td colspan="2" >
                    <input type="submit" name='submit' value='Calculate'/>
                 </td>
            </tr>
            
        </table>
    </form>
</body>
</html>
