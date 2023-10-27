<?php 

class Submit_student{
    public $fname;
    public $lname;
    public $gender;
    public $dob;
    public $class;
    public $uname;
    public $pass;


    function __construct($fname,$lname,$gender,$dob,$class,$uname,$pass){
    
        $this->fname = $fname;
        $this->lname = $lname;
        $this->gender = $gender;
        $this->dob = $dob;
        $this->class = $class;
        $this->uname = $uname;
        $this->pass = $pass;

        
    }
 function store(){
    $connect = mysqli_connect("localhost","root","","maryland_college");
if($connect){
   
        $query ="INSERT INTO student_bio (fname,lastname,gender,dob,class,uname,pass)
        value ('$this->fname','$this->lname','$this->gender','$this->dob','$this->class','$this->uname','$this->pass') ";
         $result = mysqli_query($connect,$query);

         if($result){
            header("location:student.php");
         }
  
  
}

}

    
}

$fn = $_POST["fname"];
$ln = $_POST["lname"];
$ge = $_POST["gen"];
$do = $_POST["dob"];
$cl = $_POST["class"];
$em = $_POST["mail"];
$ps = $_POST["pass"];

$staff = new Submit_student($fn,$ln,$ge,$do,$cl,$em,$ps);
$staff->store();
?>