<!--
Rohan Tumkur
12/1/2023
IT202-003
Section 003 Unit 11 Asignment
rat6@njit.edu
-->
<?php
$l_dsn = 'mysql:host=localhost;port=3306;dbname=bread_shop';
$l_username = 'bs_user';
$l_password = 'pa55word';

$n_dsn = 'mysql:host=sql1.njit.edu;dbname=rat6;port=3306';
$n_username = 'rat6';
$n_password = 'IT202Fall2023_';

$dsn = $n_dsn;
$username = $n_username;
$dbpassword = $n_password;

try{
    $db = new PDO($dsn, $username, $dbpassword);
} catch (PDOException $e) {
    $error_message = $e->getMessage();
    echo($error_message);
}
?>