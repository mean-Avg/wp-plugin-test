<?php
   $dbhost = 'remotesql.com:3306';
   $dbuser = 'FtHAFS7GzI';
   $dbpass = 'oY1TS7K5n4';
   
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   
   $sql = 'SELECT pid, company_name, project_type, year, budget FROM free_tier_list';
   mysql_select_db('FtHAFS7GzI');
   $retval = mysql_query( $sql, $conn );
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
   
//    while($row = mysql_fetch_assoc($retval)) {
//       echo "PID :{$row['pid']}  <br> ".
//          "COMPANY : {$row['company_name']} <br> ".
//          "PROJECT TYPE : {$row['project_type']} <br> ".
//          "YEAR : {$row['year']} <br> ".
//          "BUDGET : {$row['budget']} <br> ".
//          "--------------------------------<br>";
//    }
   
   echo "Fetched data successfully\n";
   
   mysql_close($conn);
?>