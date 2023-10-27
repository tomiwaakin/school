<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <style>
        *{
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
       div.header{
        position: relative;
        width: 100%;
        height: 200px;
        box-shadow: 0px 0px 20px rgb(250, 0, 0);
        background-image: url(/school/images/wallpaperflare.com_wallpaper\ \(3\).jpg);
        background-repeat: no-repeat;
        background-size: 100% 100%;
       }
       div.body{
        position: relative;
        width: 100%;
        height: 510px;
        background-color: #ffe5e9;
        display: flex;
       }
       div.profile-image{
        position: relative;
        top: 70px;
        left: 20px;
        width: 250px;
        height: 250px;
        background-color: white;
        border-bottom: 2px solid rgb(0, 0, 0);
        border-radius: 50%;
        box-shadow: 0px 5px 5px rgb(230, 230, 230);
        z-index: 1;
        overflow: hidden;
       }
       #myImg {
        position: relative;
        width: 100%;
        height: 100%;
  border-radius: 5px;
  cursor: pointer;
  transition: 0.3s;
}

#myImg:hover {opacity: 0.7;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-content {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
}

/* Caption of Modal Image */
#caption {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
  text-align: center;
  color: #ccc;
  padding: 10px 0;
  height: 150px;
}

/* Add Animation */
.modal-content, #caption {  
  -webkit-animation-name: zoom;
  -webkit-animation-duration: 0.6s;
  animation-name: zoom;
  animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
  from {-webkit-transform:scale(0)} 
  to {-webkit-transform:scale(1)}
}

@keyframes zoom {
  from {transform:scale(0)} 
  to {transform:scale(1)}
}

/* The Close Button */
.close {
  position: absolute;
  top: 15px;
  right: 35px;
  color: #f1f1f1;
  font-size: 40px;
  font-weight: bold;
  transition: 0.3s;
}

.close:hover,
.close:focus {
  color: #bbb;
  text-decoration: none;
  cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
  .modal-content {
    width: 100%;
  }
}
div.students{
    position: relative;
    top: 140px;
    left: 20px;
    width: 400px;
    height: 370px;
    background-color: white;
    padding-top: 0.6px;
    overflow-y: scroll;
}
table, td{
    position: relative;
    margin: 5px 20px;
    padding: 20px;
}
div.prf{
  position: relative;
  margin: 5px;
  font-size: 20px;
  font-weight: 500;
}
td {
  border-bottom: 1px solid #000;
}
div.results{
    position: relative;
    top: 140px;
    left: 30px;
    width: 1100px;
    height: 370px;
    background-color: white;
    padding-top: 0.6px;
    overflow-y: scroll;
    z-index: 1;
}
td.h{
  font-weight: 500;
}
    </style>
</head>
<body>
    <div class="header">
        <div class="profile-image">
            <img id="myImg" src="/school/images/student.jpg" alt="My Profile Photo">
        </div>
    </div>
    <div class="body">
        <div class="students">
          <div class="prf">Profile:</div>
            <?php 
    //connecting to mysql server
    $dbconnect = mysqli_connect("localhost","root","","maryland_college");
    //preparing sql query to retrieve data from database
    $sql = "SELECT * FROM students_bio WHERE student_id = 1";
    $recordset = mysqli_query($dbconnect,$sql);
    $numofrows = mysqli_num_rows($recordset);
    ?>
            <table>
            <?php 
            if($recordset){
                //fetching data from database and displaying the data in a table rows dynamically.
               while($rows = mysqli_fetch_assoc($recordset))
               {
                    echo '
                <tr>
                  <th></th>
                  <th></th>
                </tr>
                <tr>
                  <td>Students_Id</td>
                  <td>'.$rows["student_id"].'</td>
                </tr>
                <tr>
                    <td>Full name</td>
                    <td>'.$rows["lastname"] .' '.$rows["firstname"].'</td>
                  </tr>
                <tr>
                  <td>Last name</td>
                  <td>'.$rows["lastname"].'</td>
                </tr>
                <tr>
                    <td>First name</td>
                    <td>'.$rows["fname"].'</td>
                  </tr>
                 <tr>
                    <td>Gender</td>
                    <td>'.$rows["sex"].'</td>
                  </tr>
                  <tr>
                    <td title="date of birth">D.O.B</td>
                    <td>'.$rows["dob"].'</td>
                  </tr>
                  
                  ';
               }
            }
            ?>
              </table>
        </div>
        <div class="results">
        <div class="prf">Your Results:</div>
        <?php 
    //connecting to mysql server
    $dbconnect = mysqli_connect("localhost","root","","maryland_college");
    //preparing sql query to retrieve data from database
    $sql = "SELECT * FROM student_score INNER JOIN subjects WHERE student_id = 1";
    $recordset = mysqli_query($dbconnect,$sql);
    $numofrows = mysqli_num_rows($recordset);
    ?>
          <table>
            <th>
              <tr>
                <td class="h">#</td>
                <td class="h">subject</td>
                <td class="h">test1</td>
                <td class="h">test2</td>
                <td class="h">exam</td>
                <td class="h">Overall</td>
                <td class="h">Grade</td>
              </tr>
            </th>
            <tbody>
            <?php 
            if($recordset){
                //fetching data from database and displaying the data in a table rows dynamically.
               while($rows = mysqli_fetch_assoc($recordset))
               {
                    echo '
              <tr>
                <td>1</td>
                <td>'.$rows["subject_id"].'</td>
                <td>'.$rows["test1"].'</td>
                <td>'.$rows["test2"].'</td>
                <td>'.$rows["exam"].'</td>
                <td>'.$rows["overall"].'</td>
                <td>'.$rows["grade"].'</td>
              </tr>
               ';
               }
            }
            ?>
            </tbody>
          </table>
        </div>
    </div>


    <div id="myModal" class="modal">
        <span class="close">&times;</span>
        <img class="modal-content" id="img01">
        <div id="caption"></div>
      </div>


      <script>
        // Get the modal
        var modal = document.getElementById("myModal");
        
        // Get the image and insert it inside the modal - use its "alt" text as a caption
        var img = document.getElementById("myImg");
        var modalImg = document.getElementById("img01");
        var captionText = document.getElementById("caption");
        img.onclick = function(){
          modal.style.display = "block";
          modalImg.src = this.src;
          captionText.innerHTML = this.alt;
        }
        
        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];
        
        // When the user clicks on <span> (x), close the modal
        span.onclick = function() { 
          modal.style.display = "none";
        }
        </script>
</body>
</html>