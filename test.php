<?php
echo "<!DOCTYPE html><html lang='en'><body style='background-color: blue'>";
//echo phpinfo();
#phpinfo(INFO_ENVIRONMENT);
for ($i = 1; $i <= 20; $i++) {
    echo "<p style=\"font-size:".$i."px\">make big</p><br>";
}
for ($i = 20; $i >= 0; $i--) {
    echo "<p style=\"font-size:".$i."px\">make small</p><br>";
}
for ($i = 1; $i <= 20; $i++) {
    echo "<p style=\"font-size:".$i."px\">make big</p><br>";
}
for ($i = 20; $i >= 0; $i--) {
    echo "<p style=\"font-size:".$i."px\">make small</p><br>";
}
echo "loop complete";
echo "</body></html>";