<?

include 'header.php';

$query = 'SHOW TABLES';

$result = mysql_query($query) or die(mysql_error());



 while($data = mysql_fetch_array($result)){

        echo "<a href='table.php?table=$data[Tables_in_passport7]'>$data[Tables_in_passport7]</a><br>";
        
    }
?>
