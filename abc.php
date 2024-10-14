<?php
// Fetch YAML content from file
$yamlContent = file_get_contents('path/to/your/file.yaml');

// Function to manually parse YAML content into a PHP array
function parseCustomYaml($yamlContent) {
    $lines = explode("\n", $yamlContent); // Split by lines
    $result = [];
    $currentSection = '';  // This will keep track of the section like "roles", "DB", etc.
    
    foreach ($lines as $line) {
        $line = trim($line);  // Remove any extra spaces

        // Skip empty lines
        if (empty($line)) {
            continue;
        }

        // If line is a section header like "roles:", "DB:"
        if (preg_match('/^([a-zA-Z0-9]+):$/', $line, $matches)) {
            $currentSection = $matches[1];
            $result[$currentSection] = [];
        }

        // If line starts with "-", it's a list item like "- hDB"
        elseif (preg_match('/^- (.+)$/', $line, $matches)) {
            $result[$currentSection][] = $matches[1];
        }

        // If line contains a key-value pair, like "server: GLMyserver"
        elseif (preg_match('/^([a-zA-Z0-9]+) *: *(.+)$/', $line, $matches)) {
            $key = $matches[1];
            $value = trim($matches[2], '"\'');  // Remove any quotes around the value

            // Handle specific case for nested sections like GL and SL
            if (in_array($currentSection, ['GL', 'SL'])) {
                $result[$currentSection][$key] = $value;
            } else {
                // For non-nested structures, store the key-value pair as a string
                $result[$currentSection][] = "$key: $value";
            }
        }
    }
    
    return $result;
}

// Parse the YAML content
$parsedData = parseCustomYaml($yamlContent);

// Output the resulting array
print_r($parsedData);
?>
