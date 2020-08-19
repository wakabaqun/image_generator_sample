<!doctype html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <title>画像生成サンプル</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body style="background:#eee">
  <h1>画像生成サンプル</h1>
  <form action="generate.php" method="post">
    <p>タイトル<input type="text" name="title" /></p>
    <table>
      <tr><td>1位</td><td><input type="text" name="rank1" /></td></tr>
      <tr><td>2位</td><td><input type="text" name="rank2" /></td></tr>
      <tr><td>3位</td><td><input type="text" name="rank3" /></td></tr>
    </table>
   <input type="submit" value="生成する" />
  </form>
</body>

</html>
