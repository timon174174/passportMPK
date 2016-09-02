<?

include 'header.php';


$query = 'SELECT * FROM spr_electrics';

$tbl = "spr_electrics";

$primaryss = mysql_query("SHOW KEYS FROM $tbl WHERE Key_name = 'PRIMARY'");

$primary2 = mysql_fetch_array($primaryss);

$primary3 = $primary2[Column_name];


$result = mysql_query($query) or die(mysql_error());

?>

<div>
    <table class="spr">
        <thead>
            <tr>
                <td>Код МТО</td>
                <td>quantity</td>
                <td>Код аудитории</td>
                <td></td>
                <td></td>
            </tr>
        </thead>
        <tbody>
            <?


            while($data = mysql_fetch_array($result)){
                echo "<tr>";
                echo "<td>$data[id_mto]</td>";
                echo "<td>$data[quantity]</td>";
                echo "<td>$data[id_audience]</td>";
                
                echo "<td><a href='delete.php?tbl=$tbl&id=$data[$primary3]&col=$primary3'>Удалить</a></td>";
                echo "<td><a href='edit.php?tbl=$tbl&id=$data[$primary3]&col=$primary3'>Изменить</a></td>";
                echo "</tr>";
            }

            ?>
        </tbody>
    </table>
    <a href="add.php?tbl=<? echo $tbl; ?>"><button>Добавить</button></a>
</div>