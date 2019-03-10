<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="css/style.css" rel="stylesheet">

    <title>掲示板</title>
</head>
<header class="header">
    <p>掲示板 Ver1.0.0</p>
</header>
<body>

<div class="wrapper">

<!-- 投稿 -->
    <div class="insert">
    <fieldset>
        <legend>投稿したい内容を入力して下さい</legend>
        <form method="post" action="insert.php">
        <dl class="insert_form">
            <dt>名前</dt>
            <dd><input class="name_item" type="text" name="name" id="name" value="<?php if (!empty($_POST["name"])) {echo htmlspecialchars($_POST["name"], ENT_QUOTES);} ?>"></dd>
            <dt>コメント</dt>
            <dd><textarea class="text_item" type="text" name="comment" id="comment" col="40" row="5" value="<?php if (!empty($_POST["comment"])) {echo htmlspecialchars($_POST["comment"], ENT_QUOTES);} ?>"></textarea></dd>
            <input type="submit" name="regist" id="regist" value="投稿">
        </dl>
        </form>
    </fieldset>
    </div>

<!-- 更新と削除 -->
    
    <div class="up_del">
    <!-- 投稿更新 -->
        <div>
            <form  class="update" method="post" action="update.php">
                    <input class="id_item" type="text" name="re_id" id="re_id" placeholder="更新するIDを入力" value="<?php if (!empty($_POST["re_id"])) {echo htmlspecialchars($_POST["re_id"], ENT_QUOTES);} ?>">
                    <textarea class="text_item" type="text" name="re_com" id="re_com" col="40" row="5" placeholder="更新後のコメントを入力" <?php if (!empty($_POST["re_com"])) {echo htmlspecialchars($_POST["re_com"], ENT_QUOTES);} ?>></textarea>
                    <input type="submit" name="update" id="update" value="更新">
                </dl>
            </form>
        </div>

    <!-- 投稿削除 -->
        <div>
            <form  class="delete" method="post" action="delete.php">
                <input class="id_item" type="text" name="deleat_id" id="deleat_id" placeholder="削除するIDを入力" value="<?php if (!empty($_POST["delete_id"])) {echo htmlspecialchars($_POST["delete_id"], ENT_QUOTES);} ?>">
                <input type="submit" name="deleat" id="deleat" value="削除">
            </form>
        </div>
    </div>

</div>

<!-- 結果表示 -->
<div>
    <iframe src="select.php" frameborder="0" width="100%" height="800px"></iframe>
</div>

</body>
</html>