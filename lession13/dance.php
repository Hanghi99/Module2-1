<?php

class Dancer
{
    public $name;
    public $gender;

    public function __construct($name, $gender)
    {
        $this->name = $name;
        $this->gender = $gender;
    }
}


$Group_female = new SplQueue();
$Group_male = new SplQueue();

$khang = new Dancer("khanh", "Nam");
$nam = new Dancer("Phương", "Nam");
$quan = new Dancer("Anh", "Nam");
$thanh = new Dancer("Hoàng", "Nam");

$anh = new Dancer("Oanh", "Nữ");
$tham = new Dancer("Huyền", "Nữ");
$thao = new Dancer("Nga", "Nữ");
$an = new Dancer("Linh", "Nữ");
$dieu = new Dancer("Ý", "Nữ");
$nhung = new Dancer("Ninh", "Nữ");

$Group_female->enqueue($Oanh);
$Group_female->enqueue($Huyen);
$Group_female->enqueue($Nga);
$Group_female->enqueue($Linh);
$Group_female->enqueue($Ý);
$Group_female->enqueue($Ninh);

$Group_male->enqueue($Khanh);
$Group_male->enqueue($Phương);
$Group_male->enqueue($Anh);
$Group_male->enqueue($Hoàng);

// echo '<pre>';
// print_r($Group_female);
// echo '</pre>';

// echo '<pre>';
// print_r($Group_male);
// echo '</pre>';

function ghepcap($Group_male, $Group_female)
{
    if (count($Group_male) >= count($Group_female)) {
        foreach ($Group_male as $key => $value) {
            if (!$Group_female->isEmpty()) {
                echo $value->name . "<span style='color:blue'> ghép cặp với </span>" . $Group_female->bottom()->name . ".<br/>";
                $Group_female->shift();
            } else {
                echo $value->name . "<span style='color:red'> không thể ghép cặp vì thiếu các bạn nữ.</span>" . "<br>";
            }
        }
    } else {
        foreach ($Group_female as $key => $value) {
            if (!$Group_male->isEmpty()) {
                echo   $value->name . "<span style='color:blue'> ghép cặp với </span>"  . $Group_male->bottom()->name . ".<br/>";
                $Group_male->shift();
            } else {
                echo $value->name . "<span style='color:red'> không thể ghép cặp vì thiếu các bạn nam.</span>" . "<br>";
            }
        }
    }
}

ghepcap($Group_female, $Group_male);