<?php
$jsonData = '{ 
"u1":{ "user":"John", "age":22, "country":"United States" },
"u2":{ "user":"Will", "age":27, "country":"United Kingdom" },
"u3":{ "user":"Abiel", "age":19, "country":"Mexico" }
}';
$phpArray = json_decode($jsonData, true);
foreach ($phpArray as $key => $value) { 
    echo "<h2>$key</h2>";
    foreach ($value as $k => $v) { 
        echo "$k | $v <br />"; 
    }
}
?>