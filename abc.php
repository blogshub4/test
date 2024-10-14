<?php

// GitHub repository details
$username = 'your-username';
$token = 'your-personal-access-token';
$repository = 'username/repository-name';
$branch = 'branch-name';  // The branch from which to fetch the file
$filePath = 'path/to/your/file.yaml';  // Path to your YAML file in the repository

// URL to fetch the file from GitHub API
$url = "https://api.github.com/repos/$repository/contents/$filePath?ref=$branch";

// Set up HTTP headers for authentication and GitHub API access
$options = [
    'http' => [
        'header' => [
            "Authorization: Basic " . base64_encode("$username:$token"),
            "User-Agent: PHP"
        ]
    ]
];

// Create a stream context for the request
$context = stream_context_create($options);

// Fetch the file content from GitHub
$response = file_get_contents($url, false, $context);

// Decode the JSON response (GitHub returns file content as base64)
$responseData = json_decode($response, true);

// Check if the file was fetched successfully
if (isset($responseData['content'])) {
    // Decode base64-encoded content of the file
    $fileContent = base64_decode($responseData['content']);

    // Output or process the YAML file content
    echo "YAML File Content:\n";
    echo $fileContent;
} else {
    // Handle errors
    echo "Failed to fetch the YAML file. Error: " . $responseData['message'];
}

?>
