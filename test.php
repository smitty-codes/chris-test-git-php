<?php
echo "adding a line of code so it can be stashed";
echo "<br>";
echo "php rocks";
echo "<br>";
//echo phpinfo();
// List all environment variables
$env_vars = getenv();
foreach ($env_vars as $key => $value) {
    echo "$key => $value\n";
}