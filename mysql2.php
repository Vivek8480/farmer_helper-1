<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
    <style>
        body {
            

    font-family: Arial, Helvetica, sans-serif;
            background-color: #f2f2f2;
        }
        
        .container {
            background-color: #ffffff;
            padding: 20px;
            width: 400px;
            margin: 0 auto;
            margin-top: 50px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px 0px #888888;
        }
        
        h2 {
            text-align: center;
        }
        
        input[type=text], input[type=password] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }
        
        button {
            background-color: #4caf50;
            color: white;
            padding: 14px 20px;
            margin: 10px 0;
            border: none;
            cursor: pointer;
            width: 100%;
            border-radius: 5px;
        }
        
        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>


    <div class="container">
        <h2>Registration Form</h2>
        <form action="mysql3.php" method="post">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" required>

            <label for="email">Email</label>
            <input type="text" id="email" name="email" required>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>

            <label for="confirm-password">Confirm Password</label>
            <input type="password" id="confirm_password" name="confirm_password" required>

            <button type="submit">Register</button>
        </form>
    </div>

</body>
</html>
    



