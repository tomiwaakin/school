<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>maryland_college</title>
    <style>
        *{
            margin: 00;
            padding: 00;
        }
        body{
            background-color: brown;
        }
        #herd{
            text-align: center;
            margin-top: 10px;
            font-size: x-large;
        }
        #body{
            background-color: brown;
            
        }
        #ggg{
            display: flex;
            padding-left: 300px;
            margin-top: 50px;
            background-color: gray;
            gap: 150px;
        }
        .body{
            width: 300px;
            margin-top: 20px;
            height: 400px;
            border-radius: 15px;
            background-color: white;
        }
        .page{
            
            margin-top: 15px;
            height: 40px;
            text-align: center;
            padding-top: 10px;
            font-size: 30px;
        }
        .sta{
            margin-top: 5px;
            text-align: center;
            font-size: 20px;
        }
        marquee{
            margin-top: 10px;
            font-size: xx-large;
        }
        nav{
            margin-left: 50px;
        }
        ul li{
            margin-top: 10px;
            list-style: none;
            display: block;
            gap: 10px;
        }
        ul li a{
         font-size: larger;
         color: black;
         text-decoration: none;
        }
        a:hover{
            color: green;
            font-size: 30px;
        }
    </style>
</head>
<body>
    <section id="herd">
        <h1>Maryland College</h1>
    </section>
    <section id="body">
        
        <div id="ggg">
            <div class="body">
               <div><img src="image/stock_students_091_web.png" alt="" style="width:300px ; height: 300px;border-radius: 15px;"></div>
            <div class="page">
                Staff Page
            </div>
             <div class="sta"><a href="staff.php">Enter</a></div>
            </div>
            <div class="body">
                <div><img src="image/images.jpeg" alt="" style="width:300px ; height: 300px;border-radius: 15px;"></div>
             <div class="page">
                 Student Page
             </div>
              <div class="sta"><a href="student.php">Enter</a></div>
             </div>
           
 
            
        </div>
    </section>
    <section id="footer">
        <marquee behavior="5s" direction="">Welcome To Maryland College....    Buliding A Better Tomorrow </marquee>
        <nav>
            <ul>
                <li><a href="">About</a></li>
                
                <li><a href="">Cuntact US</a></li>
            </ul>
        </nav>
    </section>
</body>
</html>