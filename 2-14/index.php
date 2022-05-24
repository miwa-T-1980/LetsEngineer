<?php
$members = ["takahashi", "yamada", "takano", "hagiwara"];
echo count($members);
echo '<br>';
?>

<?php
$members = ["takahashi", "yamada", "takano", "hagiwara"];
sort($members);
var_dump($members);
echo '<br>';
?>

<?php
$members = [42,41,8,6,2];
sort($members);
var_dump($members);
echo '<br>';
?>

<?php
$members = ["takahashi", "yamada", "takano", "hagiwara"];
$atstr = implode("@", $members);
var_dump($atstr);
echo '<br>';


$re_members = explode("@", $atstr);
var_dump($re_members);
echo '<br>';
?>

<?php
$str = "1,2,3,4,5";
$array = explode(",",$str);
var_dump($array);
echo '<br>';
?>

<?php
echo "<br>";
echo "1.要件定義";
echo "<br>";
echo "要件定義とは、システム開発などのプロジェクトを始める前の段階で、必要な機能や要求をわかりやすくまとめていく作業のことです。";
echo "<br>";
echo "企画の進行とともに要件定義に立ち返ることも多く、目的の脱線を防止する役割も果たします。";
echo "<br>";
echo "<br>";
echo "2.単体テスト・結合テスト";
echo "<br>";
echo "「単体テスト」（ユニットテストと呼ばれることもあります）は、プログラムを構成する比較的小さな単位（ユニット）が個々の機能を正しく果たしているかどうかを検証するテストです。";
echo "<br>";
echo "「結合テスト」は、「統合テスト」、「IT（Integration Testing）」とも呼ばれ、単体テストを行ったモジュールやコンポーネントを結合した際に、意図したとおりに動作するかを確認するテストです。";
echo "<br>";
echo "<br>";
echo "3.テスト仕様書";
echo "<br>";
echo "テスト仕様書は、テスト対象の全体を見据えて、テストの指針や骨格を定めることです。文字どおり、テスト設計のための「仕様書」となります。";
echo "<br>";
echo "<br>";
echo "テスト設計仕様書の主要な項目には、以下があります。";
echo "<br>";
echo "<br>";
echo "・テストの目的と背景、重点テスト項目";
echo "<br>";
echo "・テスト設計のプロセス定義";
echo "<br>";
echo "・テストアプローチ（テスト対象機能一覧、テスト観点一覧）";
echo "<br>";
echo "・テスト環境・使用機材";
echo "<br>";
echo "上記がすべてではなく、テストプロジェクトに応じて必要な項目は追加、変更が発生することもあります。";
?>