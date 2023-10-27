<?php
session_start();
class Student_login {
    public $uname;
    public $pass;

    function __construct($uname,$pass,){
        $this->uname = $uname;
        $this->pass = $pass;}

        function store(){ 
            $connect = mysqli_connect("localhost","root","","maryland_college");
            if($connect){ 
                $query = "SELECT * FROM student_bio WHERE uname= '$this->uname'  
                AND pass = '$this->pass'";
               
               $result = mysqli_query($connect,$query);
              
        
                 if($result){
                    header("location:student_dashboard.php");
                 }else{
                    echo "username and password not found";
                
                }
                }
            }
        }
   $em = $_POST["user"];
$ps = $_POST["pass"];
$staff = new Student_login($em,$ps);
$staff->store();

   echo "<br>";
   echo "<br>";
   echo  '<a href="index.php">Go back</a>'; 
   ?>