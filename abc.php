import React from 'react';
import { useSelector, useDispatch } from 'react-redux';

// Example Redux slice
const counterSlice = {
  name: 'counter',
  initialState: {
    value: 0
  },
  reducers: {
    increment: (state) => {
      state.value += 1;
    },
    reset: (state) => {
      state.value = 0;  // Reset to initial value
    }
  }
};

// Example component showing reset functionality
const CounterWithReset = () => {
  const dispatch = useDispatch();
  const count = useSelector((state) => state.counter.value);

  const handleReset = () => {
    dispatch({ type: 'counter/reset' });
  };

  const handleIncrement = () => {
    dispatch({ type: 'counter/increment' });
  };

  return (
    <div className="p-4">
      <h2 className="text-xl font-bold mb-4">Current Count: {count}</h2>
      <div className="space-x-4">
        <button 
          onClick={handleIncrement}
          className="px-4 py-2 bg-blue-500 text-white rounded"
        >
          Increment
        </button>
        <button 
          onClick={handleReset}
          className="px-4 py-2 bg-red-500 text-white rounded"
        >
          Reset
        </button>
      </div>
    </div>
  );
};

export default CounterWithReset;


<?php

class SimpleYamlParser {
    private $indentSpaces = 2;
    
    public function parseFile($filePath) {
        try {
            // Check if file exists
            if (!file_exists($filePath)) {
                throw new Exception('File not found: ' . $filePath);
            }

            // Read file content
            $content = file_get_contents($filePath);
            if ($content === false) {
                throw new Exception('Unable to read file: ' . $filePath);
            }

            return $this->parse($content);
        } catch (Exception $e) {
            error_log('YAML Parser Error: ' . $e->getMessage());
            return false;
        }
    }

    public function parse($yamlString) {
        // Remove comments and empty lines
        $lines = array_filter(explode("\n", $yamlString), function($line) {
            $trimmedLine = trim($line);
            return $trimmedLine !== '' && !str_starts_with($trimmedLine, '#');
        });

        $result = [];
        $currentPath = [];
        $previousIndent = -1;

        foreach ($lines as $line) {
            // Count leading spaces for indentation level
            $indent = strlen($line) - strlen(ltrim($line));
            $indent = floor($indent / $this->indentSpaces);
            
            // Remove leading/trailing whitespace
            $line = trim($line);

            // Skip empty lines and comments
            if (empty($line) || $line[0] === '#') {
                continue;
            }

            // Parse key and value
            if (strpos($line, ':') !== false) {
                list($key, $value) = array_pad(explode(':', $line, 2), 2, '');
                $key = trim($key);
                $value = trim($value);

                // Adjust current path based on indentation
                while (count($currentPath) > $indent) {
                    array_pop($currentPath);
                }

                if (empty($value)) {
                    // This is a new nested level
                    $currentPath[$indent] = $key;
                } else {
                    // This is a key-value pair
                    // Handle different value types
                    $value = $this->parseValue($value);
                    
                    // Build the complete path and set the value
                    $target = &$result;
                    for ($i = 0; $i < $indent; $i++) {
                        if (isset($currentPath[$i])) {
                            if (!isset($target[$currentPath[$i]])) {
                                $target[$currentPath[$i]] = [];
                            }
                            $target = &$target[$currentPath[$i]];
                        }
                    }
                    $target[$key] = $value;
                }
            } else if (str_starts_with($line, '-')) {
                // Handle array items
                $value = trim(substr($line, 1));
                $value = $this->parseValue($value);
                
                $target = &$result;
                for ($i = 0; $i < $indent; $i++) {
                    if (isset($currentPath[$i])) {
                        if (!isset($target[$currentPath[$i]])) {
                            $target[$currentPath[$i]] = [];
                        }
                        $target = &$target[$currentPath[$i]];
                    }
                }
                
                $lastKey = end($currentPath);
                if ($lastKey) {
                    if (!is_array($target[$lastKey])) {
                        $target[$lastKey] = [];
                    }
                    $target[$lastKey][] = $value;
                }
            }

            $previousIndent = $indent;
        }

        return $result;
    }

    private function parseValue($value) {
        $value = trim($value);
        
        // Handle null
        if ($value === '~' || strtolower($value) === 'null') {
            return null;
        }
        
        // Handle booleans
        if (strtolower($value) === 'true') {
            return true;
        }
        if (strtolower($value) === 'false') {
            return false;
        }
        
        // Handle numbers
        if (is_numeric($value)) {
            return strpos($value, '.') !== false ? (float)$value : (int)$value;
        }
        
        // Handle quoted strings
        if (preg_match('/^([\'"])(.*)\1$/', $value, $matches)) {
            return $matches[2];
        }
        
        return $value;
    }
}

// Example usage:

$parser = new SimpleYamlParser();
$data = $parser->parseFile('data.yaml');

if ($data !== false) {
    echo "<pre>";
    print_r($data);
    print_r($data['dbs']['GL']);
}








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
