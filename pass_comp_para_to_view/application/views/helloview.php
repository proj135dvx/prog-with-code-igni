<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="x-ua-compatible" content="ie=edge, chrome=1"/>
    <title>
        <?php echo mega_title ?>
    </title>
    <link rel="stylesheet" href=""/>
</head>
<body>
<h1><?php echo $title ?></h1>
<table>
    <tr>
        <td>Key</td>
        <td>Value</td>
    </tr>
    <?php foreach ($rows as $key => $value): ?>
        <tr>
            <td><?php echo $key ?></td>
            <td><?php echo $value ?></td>
        </tr>
    <?php endforeach; ?>
</table>
<script src=""></script>
</body>
</html>