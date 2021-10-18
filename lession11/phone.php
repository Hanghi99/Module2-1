<form action=""method="post">
	<textarea name="string_numbers"> </textarea>
	<input type="submit" name="submit"/>
</form>
   <?php
const vinaphone 		= '091';
const mobiphone 		= '093';
const viettel_1 	    = '097';
const viettel_2   	    = '098';
$number_vinaphones 		= [];
$number_mobiles 		= [];
$number_viettels 	    = [];
$error                  = []; 
 // Xử lý post từ form
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$string_numbers = $_POST["string_numbers"];
	$numbers 		= explode(',',$string_numbers);
	for($i = 0; $i < count($numbers); $i++) {
		if(substr($numbers[$i],0,3)== vinaphone){
			array_push($number_vinaphones,$numbers[$i]);
		}
		elseif(substr($numbers[$i],0,3)== mobiphone){
			array_push($number_mobiles ,$numbers[$i]);
		}
		elseif(substr($numbers[$i],0,3)== viettel_1 || substr($numbers[$i],0,3)== viettel_2 ){
			array_push($number_viettels,$numbers[$i]);
		}
		else{
			array_push($error,$numbers[$i]);
		}
	}	
	} 

	

        
  

	
