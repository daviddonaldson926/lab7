<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Table</title>
</head>
<body>

<form action="practice4.php" method="post">
    Enter a number: <input type="number" name="number">
    <input type="submit" value="Generate Table">
</form>

<?php
if (isset($_POST['number'])) {
    $num = $_POST['number'];
    echo "<h2>Multiplication Table up to $num</h2>";

    echo "<table border='1'>";

    echo "<tr><th></th>";
    for ($i = 1; $i <= $num; $i++) {
        echo "<th>$i</th>";
    }
    echo "</tr>";

    for ($i = 1; $i <= $num; $i++) {
        echo "<tr><th>$i</th>";
        for ($j = 1; $j <= $num; $j++) {
            echo "<td>" . $i * $j . "</td>";
        }
        echo "</tr>";
    }

    echo "</table>";
}
?>

</body>
</html>


