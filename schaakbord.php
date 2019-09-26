<!DOCTYPE html>
<html>
<style type="text/css">
*{
	padding: 0;
	margin: 0;
}
	table, td{border-collapse: collapse;}
	.black{
		background-color: black;
		width: 50px;
		height: 50px;
	}
	.white{
		background-color: white;
		width: 50px;
		height: 50px;
	}

</style>
<body>
    <table>
        <tbody>
            <?php
            for ($x = 1; $x <= 8; $x++) {
                echo "<tr>";
                for ($y = 1; $y <= 4; $y++) {
                    echo "<td></td>";

                    if ($x % 2 == 0) {
                        echo '<td class="black"></td>';
                        echo '<td class="white"></td>';
                    } else {
                        echo '<td class="white"></td>';
                        echo '<td class="black"></td>';
                    }
                }
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>

</html>