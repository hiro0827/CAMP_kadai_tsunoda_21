<?php
//1.  DB接続します xxxにDB名を入れます
try {
$pdo = new PDO('mysql:dbname=localdb; charset=utf8; host=localhost','root','root');
} catch (PDOException $e) {
  exit('データベースに接続できませんでした。'.$e->getMessage());
}

//２．データ登録SQL作成
//作ったテーブル名を書く場所  xxxにテーブル名を入れます
$stmt = $pdo->prepare("SELECT * FROM bbs_table");
$status = $stmt->execute();

//３．データ表示
$view="";
if($status==false){
  //execute（SQL実行時にエラーがある場合）
  $error = $stmt->errorInfo();
  exit("ErrorQuery:".$error[2]);
}else{
  //Selectデータの数だけ自動でループしてくれる $resultの中に「カラム名」が入ってくるのでそれを表示させる例
  while( $result = $stmt->fetch(PDO::FETCH_ASSOC)){
    $view .= "<p>";
    $view .= "ID".$result["id"]." 名前：".$result["name"]."<br>"."投稿日時：".$result["date"]."<br>".$result["comment"];
    $view .= "</p>";
  }
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>表示部分</title>

<link rel ="sylesheet" href="css/reset.css">
<link rel ="sylesheet" href="css/style.css">

</head>
<body>
<!-- Head[Start] -->
<!-- Head[End] -->

<!-- Main[Start] $view-->
<div>
    <div class="select_width"><?=$view?></div>
</div>
<!-- Main[End] -->

</body>
</html>
