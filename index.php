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
            <form method="post" action="printpost.php" class="form-inline">
                <div class="form-group">
                    <label for="exampleInputName">お名前</label>
                    <input type="text" name="name1" class="form-control" id="exampleInputName" placeholder="お名前">
                </div>
                <button type="submit" class="btn btn-primary">送信</button>
            </form>

        </div>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    </body>
</html>
