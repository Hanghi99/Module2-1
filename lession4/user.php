<?php
class User {
    protected string $name;
    protected string $email;
    public    int    $role;
    public function setName($ts_name) {
        $this->name = $ts_name;
    }
    public function setemail($ts_email){
         $this->email = $ts_email;
    }
    public function setrole($ts_role) {
         $this->role =$ts_role;
    }
     function  getname(){
        return $this->name;
    }
      function getemail(){
        return $this->email;
    }
    public function getrole(){
        return $this->role;
    }
    public function getInfo(){
        return $this->name."</br>".$this->email."</br>".$this->role;
    }
    public function isAdmin(){
        if($this->role==1){
            echo "là Admin";
        }
        else if($this->role==2){
            echo "là người dùng bình thường";
        }
    }


}
$user = new User();
$user->setname("Hạ Nghi");
$user->setemail("thaonhi990508@gmail.com");
$user->setrole(1);
$user->getName();
$user->getemail();
$user->getrole();
echo $user->getInfo();
echo "</br>";
echo $user->isAdmin();