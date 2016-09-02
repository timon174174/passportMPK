<?


include 'header.php';
 
$tbl = $_GET['table'];

 $query = "SELECT * FROM $tbl";

 

$primaryss = mysql_query("SHOW KEYS FROM $tbl WHERE Key_name = 'PRIMARY'");

$primary2 = mysql_fetch_array($primaryss);

$primary3 = $primary2[Column_name];

$columnssql = mysql_query("SHOW COLUMNS FROM $tbl");







$result = mysql_query($query) or die(mysql_error());

?>

<div>
<table class="spr">
<thead>
<tr>
<?
while($data = mysql_fetch_array($columnssql)){

        echo "<td>$data[Field]</td>";
        
    }
?>
<td></td>
<td></td>
</tr>
</thead>
<tbody>
    <?


    while($data = mysql_fetch_row($result)){
        
        echo "<tr>";
        
        $count = count($data);
        $i = 0;
        while ($i < $count) {
             echo "<td>$data[$i]</td>";
             $i++;
        }


        echo "<td><a href='delete.php?tbl=$tbl&id=$data[0]&col=$primary3'>Удалить</a></td>";
        echo "<td><a href='edit.php?tbl=$tbl&id=$data[0]&col=$primary3'>Изменить</a></td>";
        echo "</tr>";
    }

    ?>
    </tbody>
</table>
<a href="add.php?tbl=<? echo $tbl; ?>"><button>Добавить</button></a>
</div>