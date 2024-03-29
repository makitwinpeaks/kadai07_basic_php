<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>アンケート回答</title>
</head>

<style>
    .management{
        margin-top: 50px
    }

</style>

<body>
    <h1>イベント来場者アンケート</h1>

    <form action="write.php" method="post">
        1.お名前： <input type="text" name="name"><br>
        2.e-mail: <input type="text" name="email"><br>
        3.今回のイベントの満足度（1:全く満足ではない⇔5:とても満足）: <input type="text" name="rate"><br>
        4.上記の理由を教えてください。 <br><textarea name="reason" cols="30" rows="10"></textarea><br>
        5.その他ご意見があればご記入ください。 <br><textarea name="opinion" cols="30" rows="10"></textarea><br>
        <button type="submit">送信</button>
    </form>
    
    <div class = management>
        <p>===管理者メニュー===</p>
        <button onclick="location.href='./read.php'">アンケート結果一覧</button>
    </div>
</body>
</html>