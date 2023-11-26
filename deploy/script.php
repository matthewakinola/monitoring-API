<?php
// Database connection settings
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "apicall";

// Array of endpoint URLs to call
$endpoints = [
    'https://getrova.com',
    'https://api.dev.getrova.io/generateinvitecode',
    'https://passfort.qa.getrova.io/',
];
// $endpoints = 'https://passfort.qa.getrova.io';

// Close cURL session
// curl_close($ch);
$resp="";
// // Function to call an endpoint and store the response
function callAndStoreEndpoint($url, $conn) {
// die($url);
    $ch = curl_init($url);
        // Set cURL options
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // Execute cURL session and get the response
        $response = curl_exec($ch);
        // Check for cURL errors
        if (curl_errno($ch)) {
            $resp.= 'cURL error: ' . curl_error($ch);
        }else {
            // No cURL errors, handle the API response
            $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

            if ($httpCode === 200) {
                // API request was successful (HTTP status code 200)
                $resp.=  "API Response:\n";
                // $resp.=  $response;
                $resp.=  $httpCode;
            } else {
                // API request failed with an error status code
                // $resp.=  "API Request Failed with HTTP Status Code: " . $httpCode . "\n";
                $resp.=  "Response:\n";
                // $resp.=  $response;
                $resp.=  $httpCode;
            }
            echo $resp;
        }

    $sql = "INSERT INTO responses (endpoint_url, response_text) VALUES ('$url', '$httpCode')";
    mysqli_query($conn, $sql);
}

// // Connect to the database
$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

// // Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// // Loop through endpoints and call them
foreach ($endpoints as $endpoint) {
    callAndStoreEndpoint($endpoint, $conn);
}


// Close the database connection
$conn->close(); 

/*
* * * * * /Applications/XAMPP/xamppfiles/bin /Applications/XAMPP/xamppfiles/htdocs/apicall/script.php
 */

 ?>