<?php
// Function to parse YAML content dynamically
function parseYaml($lines, $indentLevel = 0) {
    $result = [];
    $currentKey = null;
    $isList = false;

    foreach ($lines as $line) {
        // Skip empty lines
        if (trim($line) === '') continue;

        // Count leading spaces to determine the indent level
        $currentIndent = strlen($line) - strlen(ltrim($line));

        // If current line is less indented than the indent level, break recursion
        if ($currentIndent < $indentLevel) {
            break;
        }

        // Remove the leading spaces
        $line = trim($line);

        // Check if the line starts a list (begins with a hyphen)
        if (strpos($line, '-') === 0) {
            $isList = true;
            $line = trim(substr($line, 1));
        }

        // Split the line by ':' to separate keys from values
        $keyValue = explode(':', $line, 2);
        $key = trim($keyValue[0]);
        $value = isset($keyValue[1]) ? trim($keyValue[1], " '\"") : null;

        if ($value === null) {
            // If there's no value, assume it's a nested structure
            $nestedLines = array_slice($lines, array_search($line, $lines) + 1);
            $value = parseYaml($nestedLines, $currentIndent + 2);
        }

        if ($isList) {
            // If it's a list, add value to the array
            $result[] = $value;
        } else {
            // Otherwise, assign key-value to the result array
            $result[$key] = $value;
        }

        // Handle the case where the next line is less indented (i.e., go back to parent level)
        $isList = false;
    }

    return $result;
}

// Read the YAML file dynamically
$yamlFile = 'data.yaml'; // Path to your YAML file
$yamlContent = file_get_contents($yamlFile);

// Check if the file was read successfully
if ($yamlContent === false) {
    die('Error reading the YAML file.');
}

// Split the YAML content into lines
$lines = explode("\n", $yamlContent);

// Parse the YAML content into a PHP array
$parsedData = parseYaml($lines);

// Convert the result array to JSON
$jsonData = json_encode($parsedData, JSON_PRETTY_PRINT);

// Output the JSON
echo "YAML content as JSON:\n";
echo $jsonData;
?>





/////////////////////////
<?php
// Define the YAML content as a string
$yaml = "
dbs:
  - name: ecrime
    GL:
      server: 's1'
      port: 'p1'
    SL:
      server: 's2'
      port: 'p2'
  - name: ecrime_t
    GL:
      server: 's3'
      port: 'p3'
    SL:
      server: 's4'
      port: 'p4'
";

// Parse YAML manually (simple approach)
$lines = explode("\n", trim($yaml));
$result = [];
$currentKey = null;
$subArray = null;

foreach ($lines as $line) {
    $line = trim($line);
    
    if (strpos($line, 'dbs:') === 0) {
        $result['dbs'] = [];
    } elseif (strpos($line, '- name:') === 0) {
        // Handle a new item in the 'dbs' array
        $currentKey = count($result['dbs']);
        $result['dbs'][$currentKey]['name'] = trim(str_replace('- name:', '', $line));
    } elseif (strpos($line, 'GL:') === 0) {
        $subArray = 'GL';
        $result['dbs'][$currentKey][$subArray] = [];
    } elseif (strpos($line, 'SL:') === 0) {
        $subArray = 'SL';
        $result['dbs'][$currentKey][$subArray] = [];
    } elseif (strpos($line, 'server:') !== false) {
        $result['dbs'][$currentKey][$subArray]['server'] = trim(str_replace('server:', '', $line), "'");
    } elseif (strpos($line, 'port:') !== false) {
        $result['dbs'][$currentKey][$subArray]['port'] = trim(str_replace('port:', '', $line), "'");
    }
}

// Convert the result array to JSON
$jsonData = json_encode($result, JSON_PRETTY_PRINT);

// Output the JSON
echo "YAML as JSON: \n";
echo $jsonData;
?>
========================================




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
