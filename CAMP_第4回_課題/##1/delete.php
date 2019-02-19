
<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="js/animate.js"></script>

    <title>ユーザー削除</title>
</head>
<body class="del_wrapper">
    <div class="del_com">
        <h1 class="del_font">ユーザーの削除が完了しました。</h1>
        <img class="del_img" src="img/ojigi_neko.jpg" alt="おじぎ">
        <p  class="del_font">ご利用ありがとうございました。</p>
    </div>
    <input class="btn" type="button" onClick="location.href='index.php'" value="トップへ">

    <?php
    include ('footer.php');
    ?>

</body>
</html>