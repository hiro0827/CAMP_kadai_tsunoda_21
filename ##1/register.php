<?php 
	session_start();
	if( isset($_SESSION['user']) != "") {
	  // ログイン済みの場合は、マイページへリダイレクト
	  header("Location: home.php");
	}

	// DBとの接続
	include_once 'dbconnect.php';
?>

<?php
// 新規登録ボタンが押下されたときに実行
if(isset($_POST['signup'])) { 
	$username = $mysqli->real_escape_string($_POST['username']);
	$password = $mysqli->real_escape_string($_POST['password']);
	$password = password_hash($password, PASSWORD_DEFAULT);

	//SQL命令文を$queryへ代入
	$query = "INSERT INTO User_Data(name,password) VALUES('$username','$password')";

	//$queryを実行
	if($mysqli->query($query)) {  ?>
		<div role="alert">登録しました</div>
	<?php } else { ?>
		<div role="alert">エラーが発生しました。</div>
	<?php
	}
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

		<title>会員登録フォーム</title>
</head>
<body class="log_wrapper">

	<header class="header">
		<h1>新規登録</h1>
	</header>

	<div class="form_container">
		<form method="post" action="">
			<dl>
				<dt class="form_item"><label for="q1">ユーザー名</label></dt>
				<dd class="form_item"><input type="text" name="username" id="q1" size="50" placeholder="user" required></dd>
				<dt class="form_item"><label for="q3">パスワード</label></dt>
				<dd class="form_item"><input type="password" name="password" id="q3" size="50" placeholder="password" required></dd>
			</dl>
			<button class="btn" type="submit" name="signup">新規登録</button>

		</form>
	</div>
	<p class="link"><a href="index.php">ログインはこちら</a></p>

	<?php
	include ('footer.php');
	?>

</body>
</html>