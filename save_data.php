<?php
include 'db_config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email_address = $_POST['email_address'];
    $contact_no = $_POST['contact_no'];

    // Prepare the SQL statement with placeholders
    $stmt = $conn->prepare("INSERT INTO registerations (first_name, last_name, email_address, contact_no) VALUES (?, ?, ?, ?)");
    
    // Bind the actual values to the placeholders
    $stmt->bind_param("ssss", $first_name, $last_name,  $email_address, $contact_no);

    // Execute the statement
    if ($stmt->execute()) {
        // Redirect to request_dashboard.php after successful insertion
        header("Location: mydashboard.php");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
}

// Close the connection
$conn->close();
?>
