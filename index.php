

<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

<?php

echo "ello <br>";

   $dbhost = 'https://www.remotesql.com:3306';
   $dbuser = 'FtHAFS7GzI';
   $dbpass = 'oY1TS7K5n4';
   $i = 1;
   while($i<5){
       if($conn = (mysql_connect($dbhost, $dbuser, $dbpass))){
        mysql_close($conn);
        break;
       }
   
    echo "$i <br>";
    $i+=;
   }
   
   
   //echo "connected";
//    if(! $conn ) {
//        echo "not connecting";
//       die('Could not connect: ' . mysql_error());
//    }
//    else echo "connected <br>";
   
//    $sql = 'SELECT pid, company_name, project_type, year, budget FROM free_tier_list';
//    mysql_select_db('FtHAFS7GzI', $conn);
//    $retval = mysql_query( $sql, $conn );
   
//    if(! $retval ) {
//       die('Could not get data: ' . mysql_error());
//    }else echo "data retrieved <br>";
   
//    while($row = mysql_fetch_assoc($retval)) {
//       echo "PID :{$row['pid']}  <br> ".
//          "COMPANY : {$row['company_name']} <br> ".
//          "PROJECT TYPE : {$row['project_type']} <br> ".
//          "YEAR : {$row['year']} <br> ".
//          "BUDGET : {$row['budget']} <br> ".
//          "--------------------------------<br>";
//    }
   
//    echo "Fetched data successfully\n";
   
   
?>

</body>
</html>