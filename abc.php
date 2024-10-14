<?php
// Git repository URL with the specific branch and path to the YAML file
$repoUrl = "https://username:password@github.com/user/repo/blob/branch-name/path/to/config.yaml";

// Function to fetch the file content with username and password
function fetchProtectedGitFile($url) {
    // Set up HTTP headers for authentication
    $opts = [
        "http" => [
            "method" => "GET",
            "header" => "Authorization: Basic " . base64_encode("username:password")
        ]
    ];

    // Create a stream context with the authentication options
    $context = stream_context_create($opts);

    // Fetch the YAML file content
    $fileContent = file_get_contents($url, false, $context);

    // Handle any errors (e.g., invalid credentials)
    if ($fileContent === FALSE) {
        die("Error: Unable to fetch the YAML file. Please check your URL or credentials.");
    }

    return $fileContent;
}

// Fetch the file
$yamlContent = fetchProtectedGitFile($repoUrl);

// Output or further process the content
echo $yamlContent;

// Optionally, you could parse the YAML content into an array if needed
// For example, you could use a YAML parser like Spyc or Symfony YAML component (if allowed)
// $parsedYaml = yaml_parse($yamlContent); // Uncomment if using a YAML parser
// print_r($parsedYaml);
?>
<?php
// GitHub API URL to fetch the raw file content
$apiUrl = "https://api.github.com/repos/user/repo/contents/path/to/config.yaml?ref=branch-name";

// Function to fetch file content using the GitHub API
function fetchGitHubFile($url, $username, $password) {
    $opts = [
        "http" => [
            "method" => "GET",
            "header" => [
                "User-Agent: PHP", // GitHub API requires a User-Agent header
                "Authorization: Basic " . base64_encode("$username:$password")
            ]
        ]
    ];

    // Create a stream context with the authentication options
    $context = stream_context_create($opts);

    // Fetch the content
    $response = file_get_contents($url, false, $context);

    if ($response === FALSE) {
        die("Error: Unable to fetch file from GitHub API.");
    }

    // Decode the JSON response (GitHub API returns base64 encoded file content)
    $data = json_decode($response, true);

    if (isset($data['content'])) {
        // Decode the base64 encoded content
        return base64_decode($data['content']);
    } else {
        die("Error: File not found or invalid response.");
    }
}

// Usage example
$yamlContent = fetchGitHubFile($apiUrl, "username", "password");

// Output the YAML content
echo $yamlContent;
?>
