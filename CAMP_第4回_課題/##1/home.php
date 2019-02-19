<?php  
	session_start();

	// DBとの接続
	include_once 'dbconnect.php';

	if(!isset($_SESSION['user'])) {
	  //ログインしていない場合は、ログインページへリダイレクト
	  header('Location: index.php');
	}

	//SQL命令文を$queryへ代入
	$query = "SELECT * FROM User_Data WHERE id=".$_SESSION['user']."";// ユーザーIDをキーにDBからユーザー情報を取得

	//$queryを実行
	$result = $mysqli->query($query);

	if (!$result) {
	  print('クエリーが失敗しました。' . $mysqli->error);
	  $mysqli->close();
	  exit();
	}

	while ($row = $result->fetch_assoc()) {
	  $username = $row['name'];
	}

	// データベースの切断
	$result->close();
?>

<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css">
    <link rel="stylesheet" href="css/style.css">
    
    <script src ="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src ="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.js"></script>
    <script src ="js/animate.js"></script>

	<title>掲示板もどき</title>
</head>
<body class="main_bg">

<!-- トップ画像 -->
<div class="slider">
    <div class="slick_item"><img src="img/slick01.jpg" alt="スライド1"></div>
    <div class="slick_item"><img src="img/slick02.jpg" alt="スライド2"></div>
    <div class="slick_item"><img src="img/slick03.jpg" alt="スライド3"></div>
</div>

<!-- 全体レイアウト -->
<div class="main_wrapper">

<!-- プロフィール+投降部分 -->
    <div class="profile">
        <div class="bg_profile">
        <h1>プロフィール</h1>
            <ul>
                <li>name：<?php echo $username; ?></li>
            </ul>
        </div>

        <!-- 投稿 -->
        <div class="insert">
            <form method="post" action="insert.php">
            <dl class="insert_form">
                <dt>名前</dt>
                <dd><input type="text" name="name" id="name" col="40" row="5" value="<?php if (!empty($_POST["name"])) {echo htmlspecialchars($_POST["name"], ENT_QUOTES);} ?>"></dd>
                <dt>コメント</dt>
                <dd><textarea class="text_item" type="text" name="comment" id="comment" col="40" row="5" value="<?php if (!empty($_POST["comment"])) {echo htmlspecialchars($_POST["comment"], ENT_QUOTES);} ?>"></textarea></dd>
                <input class="btn" type="submit" name="regist" id="regist" value="投稿">
            </dl>
            </form>
        </div>

        <ul >
            <li class="logout_bg"><a href="logout.php?logout">ログアウト</a></li>
        </ul>
    </div>

<!-- 結果表示 -->
    <div class="select">
        <?php include "select.php"; ?>
    </div>

<!-- 更新と削除 -->

    <div class="right_form">
<!-- 投稿更新 -->
        <div class="update_form">
            <form  class="update" method="post" action="update.php">
                <dl>
                    <dt class="form_item"><input type="text" name="re_id" id="re_id" placeholder="更新するIDを入力" value="<?php if (!empty($_POST["re_id"])) {echo htmlspecialchars($_POST["re_id"], ENT_QUOTES);} ?>"></dt>
                    <dd class="form_item"><textarea class="text_item" type="text" name="re_com" id="re_com" col="40" row="5" placeholder="更新後のコメントを入力" <?php if (!empty($_POST["re_com"])) {echo htmlspecialchars($_POST["re_com"], ENT_QUOTES);} ?>></textarea></dd>
                    <input class="btn" type="submit" name="update" id="update" value="更新">
                </dl>
            </form>
        </div>

            <!-- 投稿削除 -->
        <div class="del_form">
            <form  class="delete" method="post" action="com_delete.php">
                <div class="form_item"><input type="text" name="deleat_id" id="deleat_id" placeholder="削除するIDを入力" value="<?php if (!empty($_POST["delete_id"])) {echo htmlspecialchars($_POST["delete_id"], ENT_QUOTES);} ?>"></div>
                <input class="btn" type="submit" name="deleat" id="deleat" value="削除">
            </form>
        </div>

        <ul>
            <li class="logout_bg"><a href="logout.php?logout&delete">会員退会</a></li>
        </ul>
    </div>
</div>

</body>
</html>
