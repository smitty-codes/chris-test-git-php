<?php
echo "<!DOCTYPE html><html lang='us'><body style='background-color: blue'>";
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