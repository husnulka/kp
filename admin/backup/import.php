<?php

// configuration
include('../connect.php');
$filename = 'backup/db-backup.sql';
$mysql_host = $db_host;
$mysql_username = $db_user;
$mysql_password = $db_pass;
$mysql_database = $db_database;

// Connect to MySQL server
mysql_connect($mysql_host, $mysql_username, $mysql_password) or die('Error connecting to MySQL server: ' . mysql_error());
// Select database
mysql_select_db($mysql_database) or die('Error selecting MySQL database: ' . mysql_error());
mysql_query("SET NAMES 'utf8'");
// Temporary variable, used to store current query
$templine = '';
// Read in entire file
$lines = file($filename);
// Loop through each line
foreach ($lines as $line) {
// Skip it if it's a comment
    if (substr($line, 0, 2) == '--' || $line == '')
        continue;

// Add this line to the current segment
    $templine .= $line;
// If it has a semicolon at the end, it's the end of the query
    if (substr(trim($line), -1, 1) == ';') {
        // Perform the query
        mysql_query($templine) or print('Error performing query \'<strong>' . $templine . '\': ' . mysql_error() . '<br /><br />');
        // Reset temp variable to empty
        $templine = '';
    }
}
echo '<div style="text-align: center; margin-top: 50px;">';
echo "Tables imported successfully<br>";
$dir = dirname(__FILE__);
echo 'From ' . $dir . '\db-backup.sql To ' . $mysql_database . '<br>';
echo '<a href="index.php?ask=adminaccount">Back</a>';
echo '</div>';
?>