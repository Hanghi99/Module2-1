<?php
class Node {
    public $value;
    public $next;
    public function __construct(){}
}
class Queue {
    public $front;
    public $back;
    public function __construct(){
        $this->front = null ;
        $this->back = null ;
    }
    public function isEmpty(){
        return is_null($this->front);
    }
    public function enqueue($value){
        $old_back = $this-> back;
        $this->back = new Node();
        $this->back->value = $value;
        if ($this->isEmpty()) {
            $this->front = $this->back;
        } else {
            $old_back->next = $this->back;
        }
    }

    public function dequeue()
    {

        if ($this->isEmpty()) {
            return null;
        }
        $removedValue = $this->front->value;
        $this->front = $this->front->next;
        return $removedValue;
    
    }
}
$queue = new Queue();
$queue->enqueue('Chiếc lược ngà');
$queue->enqueue('Rừng xà nu');
$queue->enqueue('Tây Tiến');
$queue->dequeue();
$queue->dequeue();

echo '<pre>';
	print_r($queue);
	die();

