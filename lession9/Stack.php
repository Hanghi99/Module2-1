<?php
Class Stack {
        private $data 	= [];
		private $limit 	= 0;
    public function __construct($ts_limit){
        $this->limit = $ts_limit;
    }
    // đưa phần tử vào ngăn xếp
    public function push($element){
        // đẩy phần tử vào mảng
        if (!$this->isFull()){
            array_unshift($this->data,$element);

        }
        else{
            die('Stack is full');
        }
        

    }
    // lấy phần tử ra xoá trong ngăn xếp
    Public function pop(){
        if(!$this->isEmpty()){
            array_shift($this->data);
        }
        else{
            die ('Stack is empty');
        }

    }
    // lấy phần tử ra không xoá trong ngăn xếp
    public function peek(){
        return reset($this->data);

    }
    // kiểm tra rỗng
    public function isEmpty(){
        // nếu rỗng thì trả về true , ngược lại false
        if(count($this->data)==0){
            return true;
            
        }
        else {
            return false;
        }

    }
    // kiểm tra đầy chưa
    public function isFull(){
        if(count($this->data)==$this->limit){
            return true;
        }
        else {
            return false;
        }
 
    }
}
$stack = new Stack(5);
$stack->push('Ai hiểu được lòng em');
$stack->push('Gió mang ký ức thổi thành những cánh hoa');
$stack->push('Thất tịch không mưa');
$stack->push('Nếu ốc sên có tình yêu');
$stack->push('Anh em không tiếc, em tiếc thanh xuân');
$stack->pop();
$stack->pop();
$stack->pop();
$stack->push('Thất tịch không mưa');
$stack->push('Nếu ốc sên có tình yêu');

echo $stack->peek();

echo '<pre>';
	print_r($stack);
	die();
