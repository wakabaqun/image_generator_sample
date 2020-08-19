# image_generator_sample

## 概要

<img width="595" alt="Screen Shot 2020-08-19 at 22 48 33" src="https://user-images.githubusercontent.com/69907210/90643178-3dd6f900-e26e-11ea-9226-fcca31d9c5d0.png">

テキストを画像に埋め込むWebアプリのサンプルを作りたい  
imagemagickでゴリゴリ頑張る

## 起動方法
Docker起動  
`docker build . -t php_apache && docker run --rm -p 8080:80 --mount type=bind,source="$(pwd)"/html,target=/var/www/html php_apache`

以下を開く  
[http://localhost:8080/](http://localhost:8080/)

## 起動画面
<img width="276" alt="Screen Shot 2020-08-19 at 23 09 27" src="https://user-images.githubusercontent.com/69907210/90645672-35cc8880-e271-11ea-80ff-99324d47db15.png">

↓↓↓↓↓実行↓↓↓↓↓↓  

<img width="618" alt="Screen Shot 2020-08-19 at 23 10 08" src="https://user-images.githubusercontent.com/69907210/90645679-38c77900-e271-11ea-88b8-642e21a0499c.png">


## TODO
- ランク数を動的にする(文字のポジションを動的に計算する)
- 文字数超過の処理
