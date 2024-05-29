<!DOCTYPE html>
<html>
<head>
    <title>パスワードの練習(送信後)</title>
</head>
<body>
    <?php
    $user = isset($_POST['user']) ? htmlspecialchars($_POST['user'], ENT_QUOTES, 'UTF-8') : '';
    $pass = isset($_POST['pass']) ? htmlspecialchars($_POST['pass'], ENT_QUOTES, 'UTF-8') : '';

    echo '<p>入力されたユーザーIDは、' . $user . 'です。</p>';

    echo '<p>入力されたパスワードは、' . $pass . 'です。</p>';
    ?>

    <form>
        <input type="button" value="戻る" onclick="history.back()">
    </form>
</body>
</html>