<?

include 'header.php';
 

 $query = 'SELECT * FROM ventilation';


 $tbl = "ventilation";

$primaryss = mysql_query("SHOW KEYS FROM $tbl WHERE Key_name = 'PRIMARY'");

$primary2 = mysql_fetch_array($primaryss);

$primary3 = $primary2[Column_name];



$result = mysql_query($query) or die(mysql_error());

?>

<div>
<table class="spr">
<thead>
<tr>
<td>Тип вентиляции</td>
<td>Тип вентилятора</td>
<td>Количество</td>
<td>Скорость обмена</td>
<td>Объем помещения</td>
<td>Аудитория</td>
<td></td>
<td></td>
</tr>
</thead>
<tbody>
    <?


    while($data = mysql_fetch_array($result)){
        echo "<tr>";
        echo "<td>$data[type_ventilation]</td>";
        echo "<td>$data[type_fan]</td>";
        echo "<td>$data[count]</td>";
        echo "<td>$data[speed_exchange]</td>";
        echo "<td>$data[room_volume]</td>";
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