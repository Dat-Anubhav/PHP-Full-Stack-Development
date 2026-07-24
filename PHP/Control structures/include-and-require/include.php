<!DOCTYPE html>
<html>
<head>
    <title>My Website</title>
</head>
<body>

    <!-- Pulls in the navigation bar -->
    <?php include 'menu.php'; ?>

    <h1>Welcome to my homepage!</h1>
    <p>
        <?php 
        echo "The menu is:"."<br><br>";
        foreach($menu as $m)
        {
            echo $m.PHP_EOL."<br>";

        }?>
    </p>

    <?php for($i=1;$i<=10;$i++)
        {
            echo "Test include".PHP_EOL."<br>";
        }?>

    <!-- Pulls in the copyright footer -->
    <?php include 'footer.php'; ?>

</body>
</html>
