<?php
$countries = ["America", "Japan", "China", "Korea"];

echo $countries[0];
echo $countries[1];
echo $countries[2];
echo $countries[3];

echo '<br>';
var_dump ($countries);

echo '<br>';

$fruits = ["りんご", "みかん", "ぶどう"];

echo $fruits [0];
echo '<br>';
echo $fruits [1];
echo '<br>';
echo $fruits [2];
echo '<br>';
var_dump($fruits);

echo '<br>';

$fruits = ["apple" =>"りんご", "orange" => "みかん","grape" => "ぶどう"];
$fruits[] = "もも";
$fruits["peach"] = "もも";

echo $fruits ["apple"];
echo '<br>';
echo $fruits ["orange"];
echo '<br>';
echo $fruits ["grape"];
echo '<br>';

var_dump($fruits);

echo '<br>';

$colors = ["red" =>"赤", "blue" =>"青", "green" =>"緑"];
var_dump($colors);

echo '<br>';

$colors ["yellow"] = "黄色";

var_dump($colors);

echo '<br>';
echo '<br>';
echo '〈プルリクエスト（マージリクエスト）〉 分散バージョン管理システム（VCS）の機能の一つで、コードなどを追加・修正した際、本体への反映を他の開発者に依頼する機能。';
echo '<br>';
echo '「変更を本人以外がレビューしてから反映させる」という手順を容易に実現することができる。';
echo '<br>';
echo '<br>';
echo '〈Git Flow〉 Gitにおけるリポジトリの分岐モデルであり、ルールのことを指す。';
echo '<br>';
echo 'それぞれのブランチを明確に定義し、複数人での開発時にそれぞれが好き勝手にブランチを作成し混乱することを防ぐ。';
echo '<br>';
echo '<br>';
echo '〈CRON〉 crontabコマンドはUnix系オペレーティングシステム において、コマンドの定時実行のスケジュール管理を行うために用いられるコマンドである。';
echo '<br>';
echo '標準入力からコマンド列を読み取り、crontabと呼ばれるファイルにそれを記録する。';
echo '<br>';
echo 'この記録を元に定時になると、その命令内容を読み取り、実行が行われる。';
echo '<br>';


?>