<?php

class LinkedList
{
    public $count;
    public $firstNode;
    public $lastNode;
    public function __construct()
    {
        $this->count = 0;
        $this->firstNode = NULL;
        $this->lastNode = NULL;
    }

    public function contains($obj){
        $previous = NULL;
        $current = $this->firstNode;
        for ($i = 0; $i < $this->count; $i++) {
            if ($current->readNode() === $obj) {
                return true;
            }
            $previous = $current;
            $current = $current->nextNode;
        }
        return false;
    }

    public function indexOf($obj){
        $previous = NULL;
        $current = $this->firstNode;
        for ($i = 0; $i < $this->count; $i++) {
            if ($current->readNode() === $obj) {
                return $i;
            }
            $previous = $current;
            $current = $current->nextNode;
        }
        return "Không có trong danh sách";
    }

    public function clone(){
        $previous = NULL;
        $current = $this->firstNode;
        $newList = new LinkedList;
        for ($i = 0; $i < $this->count; $i++) {
            $newList->addLast($current);
            $previous = $current;
            $current = $current->nextNode;
        }
        return $newList;
    }

    public function size(){
        return $this->count;
    }

    public function get(int $index)
    {
        $previous = NULL;
        $current = $this->firstNode;
        for ($i = 0; $i < $index; $i++) {
            $previous = $current;
            $current = $current->nextNode;
        }
        return $current->readNode();
    }

    public function removeObj($obj)
    {
        $previous = NULL;
        $current = $this->firstNode;
        for ($i = 0; $i < $this->count; $i++) {
            if ($current->readNode() === $obj) {
                $this->remove($i);
            }
            $previous = $current;
            $current = $current->nextNode;
        }
    }

    public function remove(int $index)
    {
        if ($index === 0) {
            $next = $this->firstNode->nextNode;
            $this->firstNode = $next;
            $next->previousNode = NULL;
            $this->count--;
        } else {
            if ($index === $this->count - 1) {
                $previous = $this->lastNode->previousNode;
                $this->lastNode = $previous;
                $previous->nextNode = NULL;
                $this->count--;
            } else {
                if ($index > 0 && $index < $this->count - 1) {
                    $previous = NULL;
                    $current = $this->firstNode;
                    for ($i = 0; $i < $index; $i++) {
                        $previous = $current;
                        $current = $current->nextNode;
                    }
                    $next = $current->nextNode;
                    $previous->nextNode = $next;
                    $next->previousNode = $previous;
                    $this->count--;
                } else {
                    echo "Index không hợp lệ";
                }
            }
        }
    }
    public function printList()
    {
        $current = $this->firstNode;
        for ($i = 0; $i < $this->count; $i++) {
            $arrayList[$i] = $current->readNode();
            $current = $current->nextNode;
        }
        return $arrayList;
    }

    public function addFirst($data)
    {
        if ($this->count === 0) {
            $newNode = new Node($data);
            $this->firstNode = $newNode;
            $this->lastNode = $newNode;
            $this->count++;
        } else {
            $newNode = new Node($data);
            $newNode->nextNode = $this->firstNode;
            $this->firstNode = $newNode;
            $this->count++;
        }
    }

    public function addLast($data)
    {
        if ($this->count === 0) {
            $this->addFirst($data);
        } else {
            $newNode = new Node($data);
            $this->lastNode->nextNode = $newNode;
            $newNode->previousNode = $this->lastNode;
            $newNode->nextNode = NULL;
            $this->lastNode = $newNode;
            $this->count++;
        }
    }
    public function add(int $index, $data)
    {
        if ($index === 0) {
            $this->addFirst($data);
        } else {
            if ($index === $this->count) {
                $this->addLast($data);
            } else {
                if ($index > 0 && $index < $this->count) {
                    $newNode = new Node($data);
                    $previous = NULL;
                    $current = $this->firstNode;

                    for ($i = 0; $i < $index; $i++) {
                        $previous = $current;
                        $current = $current->nextNode;
                    }
                    $newNode->nextNode = $current;
                    $newNode->previousNode = $previous;
                    $previous->nextNode = $newNode;
                    $current->previousNode = $newNode;
                    $this->count++;
                } else {
                    echo "Index không hợp lệ";
                }
            }
        }
    }
}
<?php
include ('LinkedList.php');
include ('Node.php');

$dataList = new LinkedList;
$dataList->addFirst(15);
$dataList->addFirst(16);
$dataList->addFirst(18);
$dataList->addFirst(19);
echo "<br> Thêm 4 phần tử vào đầu danh sách <br>";
print_r($dataList->printList());
$dataList->addLast(20);
echo "<br> Thêm 1  phần tử 20 vào cuối danh sách <br>";
print_r($dataList->printList());
$dataList->add(2,17);
echo "<br> Chèn 17 vào vị trí có index 2 <br>";
print_r($dataList->printList());
$dataList->add(5,4555);
echo "<br> Chèn 4555 vào vị trí có index 5 <br>";
print_r($dataList->printList());
$dataList->remove(0);
echo "<br> Xóa phần tử đầu tiên <br>";
print_r($dataList->printList());
$dataList->remove(5);
echo "<br> Xóa phần tử cuối cùng <br>";
print_r($dataList->printList());
$dataList->remove(3);
echo "<br> Xóa phần tử có index 3 <br>";
print_r($dataList->printList());
$dataList->removeObj(4555);
echo "<br> Xóa phần tử có giá trị 4555 <br>";
print_r($dataList->printList());
echo "<br> Lấy giá trị có index là 2 <br>";
echo $dataList->get(2);
echo "<br> Lấy độ dài danh sách <br>";
echo $dataList->size();
echo "<br> Clone danh sách sao chép <br>";
print_r($dataList->clone());
echo "<br> Kiểm tra xem có '16' trong danh sách <br>";
if($dataList->contains(16)){
    echo "Có";
}
else {
    echo "Không có";
}
echo "<br> Kiểm tra vị trí có '16' trong danh sách <br>";
echo $dataList->indexOf(16);

