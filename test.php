<?php
echo "adding a line of code so it can be stashed";
echo "<br>";
echo "php rocks";
echo "<br>";
//echo phpinfo();
// List all environment variables
foreach ($_ENV as $key => $value) {
    echo "$key => $value\n";
}