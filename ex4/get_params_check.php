<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <h1>YOUR SLEEPING TEST RESULT IS:</h1>
        <?php
        $nu=$_GET["hours"];
        $ag=$_GET["age"];

        if($ag>=18&&$ag<=24)
        {
            if($nu>=7&&$nu<=9)
                echo "<h2>GO TO WORK:)</h2>";
            else
                echo "<h2>NOT GOOD!!!!!  :( :(</h2>";

        }
        ?>
    </body>
</html>