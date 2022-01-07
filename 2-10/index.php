<?php
$base1 = 10;
$height1 =5;
$area1 = $base1 * $height1 /2;

$base2 = 15;
$height2 = 8;
$area2 = $base2 * $height2 /2;

$base3 = 8;
$height3 = 6;
$area3 = $base3 * $height3 /2;

function getTriangleArea($base, $height) {
    $area = $base * $height /2;
    print '三角形の面積は'.$area.'だよ'.'<br>';
}

getTriangleArea(10,5);
getTriangleArea(15,8);
getTriangleArea(8,6);


echo "<br>";

function getCuboidArea ($length, $width, $height) {
    $area = $length * $width * $height;
    print '直方体の体積は'.$area. 'です'.'<br>';
}

getCuboidArea(5,10,8);

echo "<br>";

echo "1. ハッシュ化とは特定の計算手法に基づいて、元のデータを不規則な文字列に置換する処理を指す。";
echo "<br>";
echo "ハッシュ化を施すアルゴリズムはハッシュ関数と呼ばれ、ハッシュ関数によって生成されるランダムな文字列はハッシュ値と呼ばれる。";
echo "<br>";
echo "ハッシュ関数は入力する元データによって異なるハッシュ値を返す。";
echo "<br>";
echo "同じ元データからは同じ値が得られる。また、異なる元データからは別のハッシュ値が生成される。";
echo "<br>";
echo "<br>";
echo "2. 総合テストとは、システムテスト（ST）と呼ばれることもある。ソフトウェアシステム開発の終盤で行われるテスト。";
echo "<br>";
echo "モジュールやコンポーネントの単体テストを行い、それらを結合して結合テストを行った後にすべてを結合して行うため、「システム結合テスト」と表現される場合もある。";
echo "<br>";
echo "<br>";
echo "3. デバッグとは、コンピュータープログラムの誤り・不具合・欠陥といったバグを探して取り除き、修正すること。";
echo "<br>";
echo "その作業を専門に行うソフトウェア（デバッガー）を使用したり、印刷したプログラムのソースコードをチェックしたりして行う。";
echo "<br>";


?>