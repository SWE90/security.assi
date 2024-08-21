<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Username = $_POST["Username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmpassword = $_POST["confirmpassword"];
    $gender = $_POST["gender"];
    $branch = $_POST["branch"];
   


    echo "<h2>Registration Details</h2>";
    echo "<p><strong>First Name:</strong> $Username</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Password:</strong> $password</p>";
    echo "<p><strong>Password:</strong> $confirmpassword</p>";
    echo "<p><strong>Gender:</strong> $gender</p>";
    echo "<p><strong>Branch:</strong> $branch</p>";

} else {
    header("Location:login.html");
    exit();
}
?>
