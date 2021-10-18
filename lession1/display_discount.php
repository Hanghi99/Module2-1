
<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $Product =$_POST['mota'];
    $Price   =$_POST['ListPrice'];
    $DiscountPercent =$_POST['DiscountPercent'];
    $check = true;
   
    if ($check == true){
        $DiscountAmount =floor($Price) * floor($DiscountPercent) /100;
      
        
        $Price1 = $Price - $DiscountAmount ;
        echo $Price1.' : '.$DiscountAmount;
    }
}
