<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset=UTF-8>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> ジャンケン </title>
    <link rel="stylesheet" href="css/reset.css" type="text/css" media="all" />
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
</head>
<body>
    <div class="wrapp">

        <!-- header -->
        <div class="header">
            <h1>じゃんけんゲームVer.1.0</h1>
        </div>

        <!-- main -->
        <div class="game_container">
            <p class="margin_btm">あなたの手を選んでください</p>

            <form  class="game-item" action="janken_result.php" method="GET">
                <button class="btn_style" type="submit" name="choice" value="goo">
                <img src="img/janken/guu.png" alt="グー">
                </button>

                <button class="btn_style" type="submit" name="choice" value="choki">
                <img src="img/janken/choki.png" alt="チョキ">
                </button>

                <button class="btn_style" type="submit" name="choice" value="paa">
                <img src="img/janken/paa.png" alt="パー">
                </button>

                <p>グー</p>
                <p>チョキ</p>
                <p>パー</p>
            </form>
        </div>

        <footer class="footer">
                <small>Copyrights 2019 Janken Company All Rights Reserved.</small>
        </footer>
    </div>
</body>
</html>