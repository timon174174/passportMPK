<?

include 'header.php';
 

 $query = 'SELECT * FROM disciplines';

 $tbl = "disciplines";

$primaryss = mysql_query("SHOW KEYS FROM $tbl WHERE Key_name = 'PRIMARY'");

$primary2 = mysql_fetch_array($primaryss);

$primary3 = $primary2[Column_name];



$result = mysql_query($query) or die(mysql_error());

?>

<div>
<table class="spr">
<thead>
<tr>
<td>Код шифра</td>
<td>Индекс</td>
<td>Наименование</td>
<td>Код фонда</td>
<td></td>
<td></td>
</tr>
</thead>
<tbody>
    <?


    while($data = mysql_fetch_array($result)){
        echo "<tr>";
        echo "<td>$data[id_ciphers]</td>";
        echo "<td>$data[index_discipline]</td>";
        echo "<td>$data[name]</td>";
        echo "<td>$data[id_foundation]</td>";
        echo "<td><a href='delete.php?tbl=$tbl&id=$data[$primary3]&col=$primary3'>Удалить</a></td>";
        echo "<td><a href='edit.php?tbl=$tbl&id=$data[$primary3]&col=$primary3'>Изменить</a></td>";
        echo "</tr>";
    }

    ?>
    </tbody>
</table>
<a href="add.php?tbl=<? echo $tbl; ?>"><button>Добавить</button></a>
</div>