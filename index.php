<!DOCTYPE html>
<html>

<head>
    <title>PHP Test</title>
</head>

<body>

    <?php echo $_SERVER['HTTP_USER_AGENT'] ?>

    <div>
        <?php
        if (str_contains($_SERVER['HTTP_USER_AGENT'], 'Firefox')) {
            echo 'You are using Firefox.';
        } else {
            echo 'You are not using Firefox.';
        }
        ?>
    </div>

</body>

</html>