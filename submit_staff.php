<?php 

class Submit_staff{
    public $title;
    public $fname;
    public $lname;
    public $subject;
    public $email;
    public $password;


    function __construct($title,$fname,$lname,$subject,$email,$password){
        $this->title = $title;
        $this->fname = $fname;
        $this->lname = $lname;
        $this->subject = $subject;
        $this->email = $email;
        $this->password = $password;

        
    }
 function store(){
    $connect = mysqli_connect("localhost","root","","maryland_college");
if($connect){
   
        $query ="INSERT INTO staff (stitle,fname,lname,sub,email,pass)
        value ('$this->title','$this->fname','$this->lname','$this->subject','$this->email','$this->password') ";
         $result = mysqli_query($connect,$query);

         if($result){
            header("location:staff.php");
         }
  
  
}

}

    
}
$tl = $_POST["title"];
$fn = $_POST["fname"];
$ln = $_POST["lname"];
$sb = $_POST["sub"];
$em = $_POST["email"];
$ps = $_POST["password"];

$staff = new Submit_staff($tl,$fn,$ln,$sb,$em,$ps);
$staff->store();
?>