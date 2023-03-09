<?php
// Connect to the database
$conn = mysqli_connect("localhost", "root", "", "watchdb");

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $username = mysqli_real_escape_string($conn, $_POST["username"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);
    
    // Validate the data
    if (empty($username) || empty($email) || empty($password)) {
        echo "Please fill in all the fields.";
    } else {
        // Hash the password
        $password = password_hash($password, PASSWORD_DEFAULT);
        
        // Insert the data into the database
        $sql = "INSERT INTO logins (username, email, password)
                VALUES ('$username', '$email', '$password')";
        if (mysqli_query($conn, $sql)) {
            echo "Account created successfully.";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
}
?>