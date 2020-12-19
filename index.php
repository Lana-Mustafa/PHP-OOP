<?php 
  class Student {
    public $id;
    public $name;
    public $email;
    public $mobile_number;
    public function __construct($id,$name,$email,$mobile_number)
    {
      $this->id=$id;
      $this->name=$name;
      $this->email=$email; 
      $this->mobile_number=$mobile_number; 
    }
    public function get_name($id){
        if ($this->id==$id){
        return $this->name ;
    }
}
    public function get_mobile($id){
        if ($this->id==$id){
        return $this->mobile_number ;
    }

  }}

  class Teacher extends Student{
    public $salary;
    public $subject = array() ;
    public function __construct($id,$name,$email,$mobile_number,$salary,$subject)
    {
      $this->id=$id;
      $this->name=$name;
      $this->email=$email; 
      $this->mobile_number=$mobile_number;
      $this->salary=$salary;
      $this->subject=$subject; 


    }
    public function get_salary($id){
        if ($this->id==$id){
        return $this->salary ;
    }
}
    public function get_subject($id){
        if ($this->id==$id){
        return $this->subject ;
    }
}
   

  }

  $student1=new Student(123443,"Sara","sara@orange.com ",777777777);
  $teacher1=new Teacher(96432,"Sadi","Sadi@orange.com ",777788888,800,array("English", "Arabic","Math","science"));
  

echo  $student1->get_name(123439);
echo"<br>";
echo  $student1->get_mobile(123443);
echo"<br>";
echo  $teacher1->get_salary(96432);
echo"<br>";
print_r(  $teacher1->get_subject(96432));
echo"<br>";
foreach ($teacher1->get_subject(96432)as $value){
    echo $value;
    echo "<br>";}