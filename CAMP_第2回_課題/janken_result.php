<?php
//session
session_start();
if (!isset($_SESSION["times"])){
	$_SESSION["times"] = 0;
}
if (!isset($_SESSION["win"])){
	$_SESSION["win"] = 0;
}
if (!isset($_SESSION["draw"])){
	$_SESSION["draw"] = 0;
}
if (!isset($_SESSION["lose"])){
	$_SESSION["lose"] = 0;
}

//実行文
if (isset($_GET["choice"])){
	janken_exec($_GET["choice"]);
} 
if(isset($_GET["reset"])){
	janken_exec($_GET["reset"]);
	session_destroy();
}

//結果判定用
function janken_exec($hand){
	$_SESSION["times"]++;
	$s_times = $_SESSION["times"];

	$player = ['goo' => 1, 'choki' => 2, 'paa' => 3];
	$player_jp = ['goo' => 'グー', 'choki' => 'チョキ', 'paa' => 'パー'];
	$com_jp = [ 1 => 'グー', 2 => 'チョキ', 3 => 'パー'];
	$com = rand(1, 3);
	$battle = $player[$hand] - $com;
	switch ($battle) {
		case -1 :
		case 2  :
			$result = "あなたの勝ちです。";
			$result_short = "勝ち";
			$_SESSION["win"]++;
			break;
		case 0  :
			$result = "引き分けです。";
			$result_short = "引き分け";
			$_SESSION["draw"]++;
			break;
		default :
			$result = "あなたの負けです……";
			$result_short = "負け";
			$_SESSION["lose"]++;
	}
	$player_out = $player_jp[$hand];
	$com_out = $com_jp[$com];

	$d = getdate();
	$datetime = $d["year"]."/".$d["mon"]."/".$d["mday"]." ".$d["hours"].":".$d["minutes"];
	$_SESSION["detail"] .= $datetime
	 ." あなた : ".$player_out." 相手 : ".$com_out
	 ." 結果 : ".$result_short."<br>\n"; 

	//結果
	$exec_html = <<<_EOD
	<!DOCTYPE html>
	<html lang="ja">
	<head>
		<meta charset=UTF-8>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title> ジャンケン_リザルト </title>
		<link rel="stylesheet" href="css/reset.css" type="text/css" media="all" />
		<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	</head>
	<body>
	<div class="wrapp">

        <!-- header -->
        <div class="header">		
			<h1>じゃんけんゲームVer.1.0</h1>
		</div>

		<div class= "game_container">
			<h2 class="margin_btm">あなた : $player_out 相手 : $com_out </h2>
			<h3 class="margin_btm">結果は …… $result </h3>
			<h4 class="margin_btm">- 今までの結果 -</h4>
			<p class="margin_btm">
			勝ち : {$_SESSION["win"]} / 負け : {$_SESSION["lose"]} / 引き分け : {$_SESSION["draw"]}
			</p>
			<p>詳細</p>
				<div class="example">
				<span class="example_point">{$_SESSION["detail"]}</span>
				</div>
			<p>
				<a href="janken_game.php">もう一回勝負！</a>
			</p><br>

			<form action="janken_result.php" method="GET">
			<button type="submit" name="reset" value="reset">Reset
			</button>
			</form>

			</div>
	        <footer class="footer">
                <small>Copyrights 2019 Janken Company All Rights Reserved.</small>
	        </footer>
	</div>
	</body>
	</html>
_EOD;
	echo $exec_html;
}
?> 