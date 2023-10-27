<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Page</title>
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
            margin-top: 3px;
            font-size: x-large;
            
        }
        form{
            margin: 10px auto;
            width: 400px;
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
        <h1>Maryland Collage</h1>
    </section>
    <section id="body">
        <img src="image/170428-collegetour-stock.jpg" style="height: 400px;" width="100%">
        <div>
            <form action="student_login.php" method="post">
                <div>
                    <label>Email/Username</label>
                    <input type="text" placeholder="Email/Username" name="user">
                </div>
                <div >
                    <label>Password</label>
                    <input type="password" placeholder="Password" name="pass">
                </div>
                 <button>Login</button>
                 <h3><a href="student_form.php">Register</a></h3>
            </form>
        </div>
    </section>
</body>
</html>