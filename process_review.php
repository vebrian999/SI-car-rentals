<?php
// Include your database connection file
include_once "db_connection.php";

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the rating is set
    if (isset($_POST['rating'])) {
        // Escape user inputs for security
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $title = mysqli_real_escape_string($conn, $_POST['title']);
        $description = mysqli_real_escape_string($conn, $_POST['description']);
        $rating = mysqli_real_escape_string($conn, $_POST['rating']);

        // Insert into database
        $sql = "INSERT INTO reviews (name, email, title, description, rating, created_at) 
                VALUES ('$name', '$email', '$title', '$description', '$rating', NOW())";

        if (mysqli_query($conn, $sql)) {
            // Redirect to process_review.php after successful submission
            header("Location: form_ulasan.php");
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    } else {
        echo "Please provide a rating.";
    }
}

// Close the database connection
mysqli_close($conn);
?>


