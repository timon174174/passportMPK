<?

include 'header.php';
 

 $query = 'SELECT * FROM spr_t_mto';


 $tbl = "spr_t_mto";

$primaryss = mysql_query("SHOW KEYS FROM $tbl WHERE Key_name = 'PRIMARY'");

$primary2 = mysql_fetch_array($primaryss);

$primary3 = $primary2[Column_name];




$result = mysql_query($query) or die(mysql_error());

?>

<div>
<table class="spr">
<thead>
<tr>
<td>Тип оборудования</td>
<td>Год приобретения</td>
<td>Инвертаризационный номер/лицензия</td>
<td>Вид МТО</td>
<td>Аудитория</td>
<td></td>
<td></td>
</tr>
</thead>
<tbody>
    <?


    while($data = mysql_fetch_array($result)){
        echo "<tr>";
        echo "<td>$data[type_equipment]</td>";
        echo "<td>$data[year_purchase]</td>";
        echo "<td>$data[inv_number_license]</td>";
        echo "<td>$data[type_mto]</td>";
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