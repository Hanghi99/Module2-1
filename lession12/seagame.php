<?php
session_start();
// session_destroy();
// die();
class Country {
    public $name            ;
    public $TotalGoldMedals ;
    public function __construct($name, $TotalGoldMedals)
    {
        $this->name             = $name;
        $this->TotalGoldMedals  = $TotalGoldMedals;
    }
    function setname($name){
        $this->name = $name;
    }
    function getName(){
        return $this->name;
    }
    function setTotalGoldMedals($TotalGoldMedals){
        $this->TotalGoldMedals =$TotalGoldMedals ;
    }
    function getTotalGoldMedals(){
        return $this->TotalGoldMedals;
    }

}
if (isset($_SESSION["arrayCountry"]))
{
    $arrayCountry = $_SESSION["arrayCountry"];
}
else{
    $arrayCountry = [];
}

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $country    = $_REQUEST["country"];
    $medals     = $_REQUEST["medal"];
    $objCountry = new Country($country, $medals);
    array_push($arrayCountry, $objCountry);
    $_SESSION["arrayCountry"] = $arrayCountry;
    //https://freetuts.net/ham-usort-trong-php-4593.html
    usort($arrayCountry,function($a,$b){
        return ($a->getTotalGoldMedals() < $b->getTotalGoldMedals()) ? 1 : -1;
    });
}
?>
<form action="" method="post">
    Country:
    <input type="text" name="country" placeholder="Name country">
    Total Gold Medals:
    <input type="number" name="medal" placeholder="TotalGoldMedals">
    <br/><br/>
    <input type="submit" value="Sort Rank">
    <hr/>
    Result:
    <?php
    foreach ($arrayCountry as $key => $value)
    {
        echo "Hạng " . $key + 1 . " thuộc về đất nước " . $value->getName() . "<br/>" . 
        "Total Gold Medals: ". $value->getTotalGoldMedals() . "<br/><br/>";
    }
    ?>
</form>