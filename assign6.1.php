<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">  
    <title>Assignment_6.1</title>
</head>
<body>
    <h3>
        <?php
            function checkAge($age){
                echo "The parameter is $age<br/>";
                if($age<10){
                    echo "You are too young<br/><br/>";
                    return $age;
                }elseif($age>10&&$age<18){
                    echo "Young lad!<br/><br/>";
                    return $age;
                }elseif($age>18&&$age<30){
                    echo "Young adult!<br/><br/>";
                    return $age;
                }elseif($age>30&&$age<60){
                    echo "Adulthood<br/><br/>";
                    return $age;
                }else{
                    echo "You're old!<br/><br/>";
                    return $age;
                }
            }
            checkAge(25);
            checkAge(8);
            checkAge(77);
        ?>
    </h3>
</body>
</html>