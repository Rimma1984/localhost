<!DOCTYPE html>
<html lang='ru'>

<body>
    <form action="script.php" method="GET">
        <input type="text" name="username" placeholder="Username">
        <button>Send</button>
    </form>
    <?php
    $number = 157;
    $string = "83";

    $result = $number + $string;
    echo "$number + $string =";
    echo $result;
    echo gettype ($result);
    ?>
</body>

</html>