<?php

$hostname = "localhost"; 
$username = "root"; 
$password = ""; 
$database = "studentdb"; 

// Create connection
$conn = mysqli_connect($hostname, $username, $password, $database);

// Check connection
if (!$conn) { 
    die("Connection failed: " . mysqli_connect_error()); 
} 

echo "Database connection is OK<br>"; 

// Fetch the latest fingerprint_id from the database
$sql = "SELECT MAX(fingerprint_id) AS last_fingerprint_id FROM fingerprints";
$result = mysqli_query($conn, $sql);

if ($result) {
    $row = mysqli_fetch_assoc($result);
    $last_fingerprint_id = $row['last_fingerprint_id'];

    // Increment the fingerprint_id by 1
    $new_fingerprint_id = $last_fingerprint_id + 1;

    // Example student_id for testing purposes
    $student_id = 1010;

    // Insert the new fingerprint record
    $insert_sql = "INSERT INTO fingerprints (fingerprint_id, student_id) VALUES ($new_fingerprint_id, $student_id)";
    
    if (mysqli_query($conn, $insert_sql)) {
        echo "\nNew record created successfully with fingerprint_id: $new_fingerprint_id"; 
    } else { 
        echo "Error: " . $insert_sql . "<br>" . mysqli_error($conn); 
    }

} else {
    echo "Error retrieving the last fingerprint_id: " . mysqli_error($conn);
}

// Close the connection after the query is done
mysqli_close($conn); 
?>
