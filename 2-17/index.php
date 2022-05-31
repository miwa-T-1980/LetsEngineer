<?php
$x = 0;
$i = 0;
while ($x <40) {
    $i ++;
    $s = rand (1,6);
    echo $i . "回目=" . $s . "<br>";
    $x += $s;
}
echo "合計" . $i . "回でゴールしました";
echo "<br>";
echo "<br>";

?>

<?php
date_default_timezone_set ('Asia/Tokyo');
$time = date('G');

if (5 <= $time && $time <=11 ){
    echo "今 {$time}時台です" ."<br>". "おはようございます";
}else if (12 <= $time && $time <= 16){
    echo "今 {$time}時台です" . "<br>" . "こんにちは";
}else if (17 <= $time && $time <= 24) {
    echo "今 {$time}時台です" . "<br>" ." こんばんは";
}

?>
