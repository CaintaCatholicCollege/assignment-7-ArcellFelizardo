<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Assignment_6.2</title>
</head>
<body>
    
        <?php
            echo "<table border=\"1\"align=\"center\">";
            for($square=1; $square<=50; $square++){
                echo "<tr><td>";
                echo "$square * ".$square;
                echo "</td><td>";
                echo "= ".$square * $square;
                echo "</td></tr>";
            }
            echo "</table>";
        ?>
    
</body>
</html>