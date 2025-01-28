<?php
session_start();
include("connect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
</head>
<body>
    <div style="text-align:center; padding:15%;">
      <p style="font-size:50px; font-weight:bold;">
        Hello  
        <?php 
        // Check if the session variable 'email' is set
        if (isset($_SESSION['email'])) {
            $email = $_SESSION['email'];
            
            // Use prepared statements to prevent SQL injection
            $stmt = $conn->prepare("SELECT firstName, lastName FROM users WHERE email = ?");
            $stmt->bind_param("s", $email); // Bind the email parameter as a string
            
            // Execute the query
            if ($stmt->execute()) {
                $result = $stmt->get_result();
                
                // Check if any result is returned
                if ($row = $result->fetch_assoc()) {
                    echo $row['firstName'] . ' ' . $row['lastName'];
                } else {
                    echo "User not found.";
                }
            } else {
                echo "Error executing query.";
            }
            
            $stmt->close();
        } else {
            echo "Session email is not set.";
        }
        ?>
        !!
      </p>
      <a href="logout.php">Logout</a>
    </div>
</body>
</html>
