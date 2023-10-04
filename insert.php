 <!DOCTYPE html>
<html>
<head>
    <title>User Registration</title>
</head>
<body>
    <h2>User Registration</h2>
    <form action="insert.php" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>

        <label for="email">Email:</label>
        <input type="text" id="email" name="email" required><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>

        <label for="dob">Date of Birth:</label>
        <input type="date" id="dob" name="dob" required><br><br>

        <label>Gender:</label>
        <input type="radio" id="male" name="gender" value="Male" required>
        <label for="male">Male</label>
        <input type="radio" id="female" name="gender" value="Female" required>
        <label for="female">Female</label><br><br>

        <input type="submit" value="Register">
    </form>
</body>
</html>
<?php
$servername = "127.0.0.1";
$username = "root@localhost";
$password = "vivek@6372";
$dbname = "farmer";

@$username = $_post["username"];
@$email = $_POST["email"];
@$password = $_POST["password"];
@$dob = $_POST["dob"];
@$gender = $_POST["gender"];

$query="insert into farmer_details(username,email,password,dob,gender) VALUES ('$username', '$email', '$password', '$dob', '$gender')";
$conn = new mysqli('localhost','root','vivek@6372','farmer');
if ($conn -> connect_error)
{
     die("connection failed: " . $conn->connect_error);
}
echo "connected successfully";
?>