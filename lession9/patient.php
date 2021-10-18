<?php
class Patient
{
    public $name;
    public $code;
    public $next;
}

class Queue
{
    public $front = null;
    public $back = null;

    public function isEmpty()
    {
        return is_null($this->front);
    }

    public function enqueue($name, $code)
    {
        $oldBack = $this->back;
        $this->back = new Patient();
        $this->back->name = $name;
        $this->back->code = $code;

        if ($this->isEmpty()) {
            $this->front = $this->back;
        } else {
            $oldBack->next = $this->back;
        }
    }

    public function dequeue()
    {
        if ($this->isEmpty()) {
            return null;
        }
        $getName = $this->front->name;
        $getCode = $this->front->code;
        $this->front = $this->front->next;
        return "Name: " . $getName . ", Code: " . $getCode;
    }

    public function readList()
    {
        $listData = array();
        $current = $this->front;
        while ($current != null) {
            array_push($listData, [$current->name, $current->code]);
            $current = $current->next;
        }
        return $listData;
    }
}


$patient = new Queue();
$patient->enqueue("Khanh", 3);
$patient->enqueue("Hoang", 2);
$patient->enqueue("Tri", 6);
$patient->enqueue("Nhât", 5);
$patient->enqueue("Phong", 4);
$patient->enqueue("Bao", 2);
$patient->enqueue("Thien", 10);

//$patient->dequeue();

echo '<pre>';
print_r($patient);
echo '</pre>';