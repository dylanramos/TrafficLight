<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TrafficLight</title>
    <link rel="stylesheet" href="view/styles/style.css">
</head>
<body>
    <div class="rectangle">
        <?= $content ?>
    </div>
    <div class="buttons">
        <div class="button">
            <a href="index.php?action=next">Next</a>
        </div>
        <div class="button">
            <a href="index.php?action=pause">Pause</a>
        </div>
    </div>
</body>
</html>