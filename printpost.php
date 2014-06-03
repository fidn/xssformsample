<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="Pragma" content="no-cache">
        <meta http-equiv="Cache-Control" content="no-cache">
        <title>XSS脆弱性のあるフォームサンプル</title>
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="container" style="margin-top:30px;">

<?php
    if(!isset($_POST["name1"]) || empty($_POST["name1"])){
        //名前が入力されていなかったらエラー
        echo "<p>お名前が入力されていません</p>";
        echo "<button class=\"btn btn-primary\" onClick=\"history.back()\">戻る</button>";
    }
    else{
        //POSTされた値をそのまま表示しているためXSS脆弱性がある。
        echo "送信されたお名前：";echo $_POST["name1"];
        echo "　<button class=\"btn btn-primary\" onClick=\"history.back()\">戻る</button>";
    }
?>
            
        </div>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    </body>
</html>
