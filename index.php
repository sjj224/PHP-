<?php
$chp = file_get_contents('https://api.youguo56.com/diaoyong/diaoyong.php?leixing=chp');
$tianqi = file_get_contents('https://api.youguo56.com/diaoyong/diaoyong.php?leixing=tianqi');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>调用次数</title>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="./Style/Css/Main.css" type="text/css" media="all"/>
    </head>
    <body>
        <table border="1">
            <tr>
            <td>接口名称</td>
            <td>调用次数</td>
            </tr>
            <tr>
            <td>彩虹屁</td>
            <td><?php echo $chp; ?></td>
            </tr>
            <tr>
            <td>天气查询</td>
            <td><?php echo $tianqi; ?></td>
            </tr>
            </table>
    </body>
</html>
