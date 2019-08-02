

<!DOCTYPE html>
<html>
<body>

<h1>Test</h1>

<?php
$link = mysql_connect('us-cdbr-iron-east-05.cleardb.net', 'mysql.default_user', '');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully';
mysql_close($link);
?>

</body>
</html>