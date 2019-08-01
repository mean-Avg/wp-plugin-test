

<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

<?php

// echo "ello <br>";

//    $dbhost = 'www.remotemysql.com:3306';
//    $dbuser = 'FtHAFS7GzI';
//    $dbpass = 'oY1TS7K5n4';
   
//    $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   
//    if(! $conn ) {
//       die('Could not connect: ' . mysql_error());
//    }
//    else echo "connected <br>";
   
//    $sql = 'SELECT pid, company_name, project_type, year, budget FROM free_tier_list';
//    mysql_select_db('FtHAFS7GzI');
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
   
//    mysql_close($conn);
?>
<p id = "demo"></p>
<button onlick = "myFunc()">Click</button>

<script>
    function myFunc(){
        var objConnection = new ActiveXObject("adodb.connection");
    var strConn = "driver={sql server};server=www.remotemysql.com:3306;database=FtHAFS7GzI;uid=FtHAFS7GzI;password=oY1TS7K5n4";
    objConnection.Open(strConn);
    var rs = new ActiveXObject("ADODB.Recordset");
    var strQuery = "SELECT * FROM  free_tier_list";
    rs.Open(strQuery, objConnection);
    rs.MoveFirst();
    while (!rs.EOF) {
        document.write(rs.fields(0) + "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;");
        document.write(rs.fields(1) + "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;");
        document.write(rs.fields(2) + "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    ");
        document.write(rs.fields(3) + "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    ");
        document.write(rs.fields(4) + "<br/>");
        rs.movenext();
    }
        //document.getElementById("demo").innerHTML="";
    }
</script>
</body>
</html>