<!DOCTYPE html>
<html>
<head>
    <title>プルダウンメニューの練習(結果)</title>
</head>
<body>
    <?php
    $fruit = isset($_POST['fruit']) ? htmlspecialchars($_POST['fruit'], ENT_QUOTES, 'UTF-8') : '';

    echo '<p>あなたの好きなフルーツは、' . $fruit . 'ですね。</p>';
    ?>
</body>
</html>