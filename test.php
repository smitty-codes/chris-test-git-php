<?php
echo "<!DOCTYPE html><html><body>";
echo "adding a line of code so it can be stashed";
echo "<br>";
echo "php rocks";
echo "<br>";
//echo phpinfo();
#phpinfo(INFO_ENVIRONMENT);
for ($i = 1; $i <= 20; $i++) {
    echo "<p style=\"font-size:".$i."px\">testing</p><br>";
}
for ($i = 20; $i >= 0; $i--) {
    echo "<p style=\"font-size:".$i."px\">testing</p><br>";
}
echo "loop complete";
echo "</body></html>";