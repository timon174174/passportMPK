<?

include 'header.php';
 

 $query = 'SELECT * FROM indicator_ergonomic';

 $tbl = "indicator_ergonomic";

$primaryss = mysql_query("SHOW KEYS FROM $tbl WHERE Key_name = 'PRIMARY'");

$primary2 = mysql_fetch_array($primaryss);

$primary3 = $primary2[Column_name];



$result = mysql_query($query) or die(mysql_error());

?>

<div>
<table class="spr">
<thead>
<tr>
<td>Показатель</td>
<td>Показатель значения</td>
<td>Дополнительные показатели</td>
<td>Учебный год</td>
<td>Аудитория</td>
<td></td>
<td></td>
</tr>
</thead>
<tbody>
    <?


    while($data = mysql_fetch_array($result)){
        echo "<tr>";
        echo "<td>$data[index]</td>";
        echo "<td>$data[indicator_values]</td>";
        echo "<td>$data[additional_indicators]</td>";
        echo "<td>$data[academic_year]</td>";
        echo "<td>$data[audience]</td>";
        echo "<td><a href='delete.php?tbl=$tbl&id=$data[$primary3]&col=$primary3'>Удалить</a></td>";
        echo "<td><a href='edit.php?tbl=$tbl&id=$data[$primary3]&col=$primary3'>Изменить</a></td>";
        echo "</tr>";
    }

    ?>
    </tbody>
</table>
<a href="add.php?tbl=<? echo $tbl; ?>"><button>Добавить</button></a>
</div>
