<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Hello PHP </h1>
    <?php 
        $mode = "dark";
        ?>
        <?php if ($mode == "dark"): ?>
            <div style="background: #333; color: white; padding: 20px">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
            </div>
        <?php else: ?>
            <div style="background: #ccc; color: white; padding: 20px">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
            </div>
        <?php endif ?>
</body>
</html>