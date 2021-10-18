<?php
$array = [2, 3, 2, 5, 6, 1, -2, 3, 14, 12]; // mảng theo đề bài
  // Sắp xếp mảng
  function bubbleSort($array){
for ($i = 0; $i < (count($array) - 1); $i++)
{
    for ($j = $i + 1; $j < count($array); $j++) // lặp các phần tử phía sau
    {
        if ($array[$i] > $array[$j]) // nếu phần tử $i bé hơn phần tử phía sau
        {
            // hoán vị
            $tmp = $array[$j];
            $array[$j] = $array[$i];
            $array[$i] = $tmp;
        }
    }
}
  
return $array;
}
// Hàm xuất ra màn hình
function xuat_mang_ra_man_hinh($array)
{
    
    for ($i = 0; $i < count($array); $i++){
        echo $array[$i] . ' ';
    }
}
// sắp xếp
$array = bubbleSort($array);
  
// xuất ra màn hình
xuat_mang_ra_man_hinh($array);