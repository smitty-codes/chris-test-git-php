<?php
echo "<!DOCTYPE html><html><body>";
echo "adding a line of code so it can be stashed";
echo "<br>";
echo "php rocks";
echo "<br>";
//echo phpinfo();
#phpinfo(INFO_ENVIRONMENT);
for ($i = 1; $i <= 10; $i++) {
    echo "<p style=\"font-size:".$i."px\">testing</p><br>";
}
echo "</body></html>";