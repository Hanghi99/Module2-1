<?php
$array = [1, 9, 4.5, 6.6, 5.7, -4.5];


function selectionSort($array)
{
    
  
    // Lặp để sắp xếp
    for ($i = 0; $i < (count($array) - 1); $i++)
    {
        // Tìm vị trí phần tử nhỏ nhất
        $min = $i;
        for ($j = $i + 1; $j < count($array); $j++){
            if ($array[$j] < $array[$min]){
                $min = $j;
            }
        }
  
        // Sau khi có vị trí nhỏ nhất thì hoán vị
        // với vị trí thứ $i
        $temp = $array[$i];
        $array[$i] = $array[$min];
        $array[$min] = $temp;
    }
  
    // Trả về mảng đã sắp xếp
    return $array;
}
selectionSort($array);

 for ($i = 0; $i < count($array); $i++){
        echo $array[$i] . ' ';
    }