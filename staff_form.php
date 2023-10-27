<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>staff registation Page</title>
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
        form{
            margin: 100px auto;
            width: 500px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 1rem;
            box-shadow: 0 0 4px gray;
            padding: 14px;
            background: rgba(0, 0, 0, 0.6);
            border-radius: 8px;
            backdrop-filter: blur(8);
            color: black;

        }
        form > div{
            display: flex;
            width: 80%;
            flex-direction: column;
            gap:8px;
        }
        label{
            color: whitesmoke;
            color: black;
        }
        input{
            background: none;
            width: 100%;
            border: none;
            outline: none;
            border-bottom: 1px solid white;
        }
        button{
            background-color: black;
            color: white;
            width: 80%;
            
            border-radius: 8px;
        }
    </style>
</head>
<body>
    <section id="herd">
        <h1>Maryland College</h1>
    </section>
    <section>
        <form action="submit_staff.php" method="post">
            
            <div>
                <label for="name">Title</label>
                <select name="title" id="title">
                    <option value="title">Mr</option>
                    <option value="title">Mrs</option>
                    <option value="title">Miss</option>
                </select>
             </div>
            <div>
               <label for="name">First Name</label>
               <input type="text" id="name" name="fname" required>
            </div>
            <div>
                <label for="name">Last Name</label>
                <input type="text" id="name" name="lname" required>
             </div>
             <div>
                <label for="name">subject</label>
                <input type="text" id="sub" name="sub" required>
             </div>
            <div> <label for="email">Email</label>
               <input type="text" id="email" name="email" required></div>
            <div>
               <label for="password">Password</label>
               <input type="text" id="password" name="password" required>
           </div>
               <button type="submit">Submit</button>
           <div>
           <a href="staff.html"> Already Register : Log in</a>
        </div>
           </form>
    </section>
</body>
</html>