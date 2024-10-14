<?php
// Git repository URL for the YAML file
$gitUrl = 'https://github.com/your-username/your-repo/raw/main/path/to/your-file.yaml';

// Username and personal access token (PAT) for authentication
$username = 'your-username';
$token = 'your-access-token';

// Initialize cURL session
$ch = curl_init();

// Set cURL options
curl_setopt($ch, CURLOPT_URL, $gitUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Authorization: Basic ' . base64_encode("$username:$token")
]);

// Execute the request and fetch the response
$response = curl_exec($ch);

// Check if there was an error
if ($response === false) {
    echo "cURL Error: " . curl_error($ch);
} else {
    // Output or parse the YAML content
    echo $response;
}

// Close cURL session
curl_close($ch);
?>
