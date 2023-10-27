<?php session_start()?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff_dashboard</title>
    <style>
        *{
            margin: 00;
            padding: 00;
        }
        #top{
            width: 100%;
            height: 300px;
            
            background-color: orange;
            text-align: center;
        }
        h1{
            font-size:50px ;

        }
        #he{
            padding-top: 100px;
        }
        #body{
            display: flex;

        }
        #bio{
            border-right: solid black;
            width: 800px;
        }
    </style>
</head>
<body>
    <section id="top">
        
    <div id="he"><h1>MARYLAND COLLEGE</h1></div>
    </section>
    <section id="body">
    <div id="bio">
        <?php
    $dbconnect = mysqli_connect("localhost","root","","maryland_college");
    //preparing sql query to retrieve data from database
    $sql = "SELECT * FROM staff";
    $recordset = mysqli_query($dbconnect,$sql);
    
    ?>
        <table>
            
            <?php 
            if($recordset){
                //fetching data from database and displaying the data in a table rows dynamically.
               while($rows = mysqli_fetch_assoc($recordset))
               {
                    echo '
                    <tr>
                    <th>Title</th> 
                        <td>'.$rows["stitle"].'</td>
                    </tr>
                    <tr>
                    <th>Name</th>
                    <td>' .$rows["fname"].' ' .$rows["lname"].'</td>

                    </tr>
                    <tr>
                    <th>Subject</th> 
                      <td>'.$rows["sub"].'</td>
                      </tr>
                      <tr> 
                      <th>Email</th> 
                      <td>'.$rows["email"].'</td>
                      </tr>
                    '
                       
                    ;
               }
            }
            ?>
        </table>
    </div>
    <div id="sut">
    <?php 
    //connecting to mysql server
    $dbconnect = mysqli_connect("localhost","root","","maryland_college");
    //preparing sql query to retrieve data from database
    $sql = "SELECT * FROM student_bio";
    $recordset = mysqli_query($dbconnect,$sql);
    $numofrows = mysqli_num_rows($recordset);
    echo $numofrows;
    ?>
    <table border="5">
        <thead>
            <tr>
                <td>ID</td>
                <td>FIRST NAME</td>
                <td>LASTNAME</td>
                <td>GENDER</td>
                <td>CLASS</td>
                <td>ACTIONS</td>
            </tr>
        </thead>
        <tbody>
            <?php $status = "";
            if($recordset){
                //fetching data from database and displaying the data in a table rows dynamically.
               while($rows = mysqli_fetch_assoc($recordset))
               {
              
                    echo '
                    <tr>
                        <td>'.$rows["student_id"].'</td>
                        <td>'.$rows["fname"].'</td>
                        <td>'.$rows["lastname"].'</td>
                        <td>'.$rows["gender"].'</td>
                        <td>'.$rows["class"].'</td>
                        <td><a href="useredit.php?user_id='.$rows["student_id"].'">score</a></td>
                    </tr>';
               }
            }
            ?>
            </tbody>
        </table>
    </div>
    </section>
</body>
</html>