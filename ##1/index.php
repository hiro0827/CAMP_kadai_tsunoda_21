<?php 
	ob_start();
	session_start();
	if( isset($_SESSION['user']) != "") {
	  // ログイン済みの場合は、マイページへリダイレクト
	  header("Location: home.php");
	}

	// DBとの接続
	include_once 'dbconnect.php';
?>

<?php
	
	if(isset($_POST['login'])) { // ログインボタンが押下されたときに実行

	  $name = $mysqli->real_escape_string($_POST['name']);
	  $password = $mysqli->real_escape_string($_POST['password']);

	  //SQL命令文を$queryへ代入
	  $query = "SELECT * FROM User_Data WHERE name='$name'"; // 入力されたユーザ名がDB上にあるか

	  //$queryを実行
	  $result = $mysqli->query($query);
	  if (!$result) {
	    print('ログインに失敗しました。ユーザ名が違う可能性があります。');
	    $mysqli->close();// データベースの切断
	    exit();
	  }

	  // DB上から該当ユーザのパスワード(暗号化済み）とユーザーIDを取得
	  while ($row = $result->fetch_assoc()) {
	    $db_hashed_pwd = $row['password'];
	    $user_id = $row['id'];
	  }

	  // データベースの切断
	  $result->close();

	  // ハッシュ化されたパスワードがマッチするかどうかを確認
	  if (password_verify($password, $db_hashed_pwd)) {
	    $_SESSION['user'] = $user_id;
	    header("Location: home.php");// ログイン
			exit;
	  } else { ?>
	    <div role="alert">ユーザ名とパスワードが一致しません。</div>
	  <?php }
	}

?>

<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/style.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="js/animate.js"></script>

	<title>ログインフォーム</title>
</head>
<body class="log_wrapper">

<header class="header">
	<h1>ログイン</h1>
</header>

<div class="form_container">
	<form method="post" action="">
		<dl>
			<dt class="form_item"><label for="q1">ユーザー名</label></dt>
			<dd class="form_item"><input type="name" name="name" id="q1" size="50" placeholder="user" required></dd>
			<dt class="form_item"><label for="q2">パスワード</label></dt>
			<dd class="form_item"><input type="password" name="password" id="q2" size="50" placeholder="password" required></dd>
		</dl>
		<button class="btn" type="submit" name="login">ログイン</button><br>
	</form>
</div>
<p class="link"><a class="fuga" href="register.php">はじめてご利用される方（新規ユーザ登録）</a></p>

<?php
include ('footer.php');
?>

</body>
</html>