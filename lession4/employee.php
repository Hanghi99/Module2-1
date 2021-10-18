<?php
    class Employee 
    {
        public $Ho              = "";
        public $Ten             = "";
        public $Birth           = "";
        private $Address        = ""; 
        public $Job_position    = "";
        public function __construct($ho,$ten,$birth ,$address ,$job_position ) 
        {
           
        $this->Ho            = $ho;
        $this->Ten           = $ten;
        $this->Birth         = $birth;
        $this->Address       = $address;
        $this->Job_position  = $job_position;
        }
         // trả về giá trị phương thức họ
         public function getHo()
        {
            return $this->Ho ;
        }
         // thiết lập phương thức họ
        function setHo($ho)
        {
            $this->Ho = $ho;
        }
         // trả về giá trị phương thức tên     
         public function getTen()
        {
            return $this->Ten ;
        }
        // thiết lập phương thức tên
        function setTen($ten)
        {
            $this->Ten = $ten;
        }       
          // trả về giá trị phương thức ngày sinh
         public function getBirth()
        {
            return $this->Birth ;
        }
        // thiết lập phương thức ngày sinh
        function setBirth($birth)
        {
            $this->Birth = $birth;
        }
        // trả về giá trị phương thức địa chỉ  
        private function getAddress()
        {
            return $this->Address ;
        }
        // thiết lập phương thức ngày địa chỉ
        function setAddress($address)
        {
            $this->Address = $address;
        }
        // trả về giá trị phương thức ngày  vị trí công việc
        public function getJob_position()
        {
            return $this->Job_position;
        }
        // thiết lập giá trị phương thức vị trí công việc
        function setJob_position($job_position)
        {
            $this->Job_position = $job_position;
        }
    }
