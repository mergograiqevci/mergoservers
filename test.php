<!DOCTYPE html>
<html>
    <head>
        <?php
        $msg="mergo123";
        ?>
    </head>
    <body>
        <form action="test1.php" method="post">
        <input type="text" value="mergim" name="emri">
        <p name="paragraph">wqeq</p>
        <p name="massage"><?php echo $msg; ?> </p>
        </form>
    </body>
</html>