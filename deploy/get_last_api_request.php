<?php
$db_host = "localhost"; // Your MySQL host
$db_user = "localhost";
$db_pass = "";
$db_name = "postgres";

        // Array of endpoint URLs to call
        // $endpoints = [
        //     'https://getrova.com',
        //     'https://api.dev.getrova.io/generateinvitecode',
        //     'https://passfort.qa.getrova.io/',
        // ];

        // function callAndStoreEndpoint($url) {
        

// Create a database connection
$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to get the last API request
$sql = "SELECT response_text FROM responses ORDER BY id DESC LIMIT 1";
$result = $conn->query($sql);
$response_code =$result;

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $response_code = $row['response_text'];
} else {
    $response_code = 'N/A';
}

            // Return the response as JSON
            echo json_encode(['response_code' => $response_code]);
// }


// // Create a database connection
// $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

// // Check the connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }


// foreach ($endpoints as $endpoint) {
//     callAndStoreEndpoint($endpoint);
// }

// Close the database connection
$conn->close();
?>
