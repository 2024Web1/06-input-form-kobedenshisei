<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>プルダウンメニューの練習(結果)</title>
    </head>
    <body>
        <?php
        $fruit = isset($_POST['fruit']) ? htmlspecialchars($_POST['fruit'], ENT_QUOTES, 'UTF-8') : '';

        echo '<p>あなたの好きなフルーツは、' . $fruit . 'ですね。</p>';
        ?>
        <form>
            <input type="button" value="戻る" onclick="history.back()">
        </form>
    </body>
</html>