<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <?php
        $myfile = fopen("whichorder.txt", "r") or die("Unable to open file!");
        $str=fread($myfile,filesize("whichorder.txt"));
        $str1=explode("--",$str);
        echo("first".$str1[0] ." second".$str1[1]);
        fclose($myfile);
        ?>
    </body>
</html>