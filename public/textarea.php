<!DOCTYPE html>
<html>
<head>
    <title>テキストエリア練習問題(結果)</title>
</head>
<body>
    <?php
    $input_text = isset($_POST['input_text']) ? htmlspecialchars($_POST['input_text'], ENT_QUOTES, 'UTF-8') : '';

    echo '<p>入力された文章はつぎのとおりです。</p>';
    echo '<p>' . $input_text . '</p>';
    ?>
</body>
</html>