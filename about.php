<?php 
function parseYaml($yaml) {
    $lines = explode("\n", trim($yaml));
    $result = [];
    $currentSection = null;
    $currentItem = null;
    
    foreach ($lines as $line) {
        $line = trim($line);

        // Skip empty lines
        if (empty($line)) continue;

        // Check for main section (e.g., "dbs:")
        if (preg_match('/^dbs\s*:/', $line)) {
            $result['dbs'] = [];
            continue;
        }
        
        // Check for item in array (e.g., "- name: ec")
        if (preg_match('/^- name\s*:\s*(\w+)/', $line, $matches)) {
            // Add the previous item to the dbs array, if it exists
            if ($currentItem) {
                $result['dbs'][] = $currentItem;
            }
            
            // Start a new item
            $currentItem = ['name' => $matches[1]];
            continue;
        }

        // Check for nested section (e.g., "GL:" or "SL:" or any other section)
        if (preg_match('/^(\w+)\s*:\s*$/', $line, $matches)) {
            $currentSection = $matches[1];
            $currentItem[$currentSection] = [];
            continue;
        }

        // Check for key-value pairs within a nested section (e.g., "srv : 11.22.334")
        if ($currentSection && preg_match('/^(\w+)\s*:\s*(.+)$/', $line, $matches)) {
            $key = $matches[1];
            $value = $matches[2];
            $currentItem[$currentSection][$key] = $value;
        }
    }
    
    // Add the last item to the dbs array
    if ($currentItem) {
        $result['dbs'][] = $currentItem;
    }

    return $result;
}

// YAML string with extra spaces around colons
$yaml = "
dbs:
  - name: ec
    GL :
      srv : 11.22.334
      prt : 1234
    SL :
      srv :  22:11:990
      prt  :  1234
  - name: ect
    GG :
      srv : 11.22.334
      prt : 1234
    SS :
      srv  :  22:11:999
      prt  :  1234
";

// Parse the YAML
$data = parseYaml($yaml);
echo "<pre>";
// Output the array
print_r($data);





<?php 
function parseYaml($yaml) {
    $lines = explode("\n", trim($yaml));
    $result = [];
    $currentSection = null;
    $currentItem = null;
    
    foreach ($lines as $line) {
        $line = trim($line);

        // Skip empty lines
        if (empty($line)) continue;

        // Check for main section
        if (strpos($line, 'dbs:') === 0) {
            $result['dbs'] = [];
            continue;
        }
        
        // Check for item in array (e.g., "- name: ec")
        if (preg_match('/^- name: (\w+)/', $line, $matches)) {
            // Add the previous item to the dbs array, if exists
            if ($currentItem) {
                $result['dbs'][] = $currentItem;
            }
            
            // Start a new item
            $currentItem = ['name' => $matches[1]];
            continue;
        }

        // Check for nested section (e.g., "GG:" or "SS:")
        if (preg_match('/^(\w+):$/', $line, $matches)) {
            $currentSection = $matches[1];
            $currentItem[$currentSection] = [];
            continue;
        }

        // Check for key-value pairs within a nested section (e.g., "srv: 11.22.334")
        if (preg_match('/^(\w+)\s*:\s*(.+)$/', $line, $matches)) {
            $key = $matches[1];
            $value = $matches[2];
            $currentItem[$currentSection][$key] = $value;
        }
    }
    
    // Add the last item to the dbs array
    if ($currentItem) {
        $result['dbs'][] = $currentItem;
    }

    return $result;
}

// YAML string
// $yaml = "
// dbs:
//   - name: ec
//     GG:
//       srv: 11.22.334
//       prt: 1234
//     SS:
//       srv: 22:11:9996
//       prt: 1234
//   - name: ect
//     GG:
//       srv: 11.22.334
//       prt: 1234
//     SS:
//       srv: 22:11:999
//       prt: 1234
// ";

// Parse the YAML
$content = file_get_contents("data1.yaml");
$data = parseYaml($content);
echo "<pre>";
// Output the array
print_r($data);
