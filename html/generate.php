<?php
  //変数の取得
  $title = $_POST["title"];
  $rank1 = $_POST["rank1"];
  $rank2 = $_POST["rank2"];
  $rank3 = $_POST["rank3"];

  //画像生成関数
  function generateImage(){
    global $title, $rank1, $rank2, $rank3;

    //定数
    $title_font_size = 70;
    $title_top_margin = 36;
    $ranking_font_size = 65;
    $ranking_left_margin = 320;
    $ranking1_top_margin = 276;
    $ranking2_top_margin = 400;
    $ranking3_top_margin = 520;

    //テンプレートの読み込み
    $canvas = new Imagick();
    $canvas->readImage('template.png');

    //枠線をつけてみた
    $canvas->borderImage('black', 3, 1);

    $draw = new ImagickDraw();
    $draw->setFont('./NotoSansCJKjp-Medium.otf'); //フォント指定(日本語を表示する際は日本語フォントが必須)

    //タイトルの配置
    $draw->setFontSize($title_font_size); //フォントサイズ指定
    $draw->setGravity(Imagick::GRAVITY_NORTH); //Gravity指定(中央上部)
    $draw->annotation(0, $title_top_margin, $title);

    //1位の配置
    $draw->setGravity(0); //Gravityの初期化
    $draw->setFontSize($ranking_font_size);
    $draw->annotation($ranking_left_margin, $ranking1_top_margin, $rank1);

    //2位の配置
    $draw->setFontSize($ranking_font_size);
    $draw->annotation($ranking_left_margin, $ranking2_top_margin, $rank2);

    //3位の配置
    $draw->setFontSize($ranking_font_size);
    $draw->annotation($ranking_left_margin, $ranking3_top_margin, $rank3);

    //画像出力
    $canvas->drawImage($draw);
    $canvas->setImageFormat('png');
    echo '<img width=600 height=315 src="data:image/png;base64,'.base64_encode($canvas->getImageBlob()).'"/>';
    $canvas->clear();
  }

  function h($s) {
    return htmlspecialchars($s, ENT_QUOTES, "UTF-8");
  }
?>

<!doctype html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <title>画像生成サンプル</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body style="background:#eee">
  <h1>画像生成サンプル出力結果</h1>
  <h2>入力</h2>
  <p>タイトル：<?php echo h($title); ?></p>
  <table>
    <tr><td>1位</td><td><?php echo h($rank1); ?></td></tr>
    <tr><td>2位</td><td><?php echo h($rank2); ?></td></tr>
    <tr><td>3位</td><td><?php echo h($rank3); ?></td></tr>
  </table>

  <h2>出力画像</h2>
  <?php generateImage() ?>

  <h2>(加工前画像)</h2>
  <img width=600 height=315 src="template.png">
</body>

</html>