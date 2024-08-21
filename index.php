<?php
<<<<<<< HEAD

    $db_server = "localhost";
    $db_user = "root";
    $db_pass ="";
    $db_name = "slaehDB";
    $conn = "";
  

    try{
        $conn = mysqli_connect($db_server,$db_user,$db_pass,$db_name);
    }
   catch (Exception $e){
    echo "Colud not connect!";
   }
    if($conn){
        echo"you are connected";
    }
    
=======
// Check if the form is submitted for registration
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $Username = $_POST["Username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmpassword = $_POST["confirmpassword"];
    $gender = $_POST["gender"];
    $branch = $_POST["branch"];
    
    // Display the submitted data
    echo "<h2>Registration Details</h2>";
    echo "<p><strong>First Name:</strong> $Username</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Password:</strong> $password</p>";
    echo "<p><strong>Password:</strong> $confirmpassword</p>";
    echo "<p><strong>Gender:</strong> $gender</p>";
    echo "<p><strong>Branch:</strong> $branch</p>";
  

    // Add edit and delete buttons for each record
    echo "<form action='form.php' method='POST'>";
    echo "<input type='hidden' name='editID' value='record_id'>";
    echo "<button type='submit' name='editSubmit'>Edit</button>";
    echo "</form>";

    echo "<form action='form.php' method='POST'>";
    echo "<input type='hidden' name='deleteID' value='record_id'>";
    echo "<button type='submit' name='deleteSubmit'>Delete</button>";
    echo "</form>";
} else {
    // If the form was not submitted via POST method, redirect to the form page
    header("Location:login.html");
    exit();
}
>>>>>>> edit-4
?>