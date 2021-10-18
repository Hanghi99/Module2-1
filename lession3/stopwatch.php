<?php
class StopWatch {
    // Trường startTime và endTime là private
    private $startTime;
    private $endTime;
     // Phương thức khởi tạo không tham số khởi tạo startTime với thời gian hiện tại của hệ thống.
     function __construct(){
        $this->startTime= Time();
    }
    // phương thức getter để trả về giá trị của startTime và endTime
    public function getstartTime(){
        return $this->startTime;
    }
    public function getendTime(){
        return $this->endTime;
    }
   
    // Phương thức start() để reset startTime về thời gian hiện tại của hệ thống.
    function start(){
        $this->startTime = microtime(true);

    }
    // Phương thức stop() để thiết đặt endTime về thời gian hiện tại của hệ thống.
    function stop(){
        $this->endTime = microtime(true);
    }
    // Phương thức getElapsedTime() trả về thời gian đã trôi qua theo số milisecond giây
    function getElapsedTime(){
        Return $this->endTime - $this->startTime ;
    }
    function
}
$stopWatch = new StopWatch();
// echo $stopWatch->getElapsedTime();
echo "</br>";
echo $stopWatch->getstartTime();
$stopWatch->start();

for($i=1 ; $i <= 100000 ;$i++)
{
   echo $i;
}
//  cho đồng hồ dừng 
$stopWatch->stop();
echo "<br>";
echo $stopWatch->getElapsedTime();
