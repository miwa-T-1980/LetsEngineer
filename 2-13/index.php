<?php
    $x = 1.5;
    echo ceil($x);
    echo '<br>';
?>

    <?php
    $x = 3.8;
    echo floor($x);
    echo '<br>';
?>

<?php
    $x = 5.2;
    echo round($x);
    echo '<br>';
?>

<?php
    function circleArea($r) {
        $circle_area = $r * $r * pi();
        echo $circle_area; 
    }
    circleArea(3);
    echo '<br>';
?>

<?php
    echo mt_rand(1, 100);
    echo '<br>';
?>

<?php
    $str = "I'm fine.";
    echo strlen($str);
    echo '<br>';
?>

<?php
    $str = "yamada";
    echo strpos($str, "a");
    echo '<br>';
?>

<?php
    $str = "yamada";
    echo substr($str, -3, 3);
    echo '<br>';
?>

<?php
    $str = "yamada";
    echo str_replace("yamada", "YamaDa", $str);
    echo '<br>';
?>

<?php
    $str = "I am Yamada";
    echo str_replace(" ", "", $str);
    echo '<br>';
?>

<?php
    $str = "文字カウントはライターにとっての必需品です。";
    echo mb_strlen($str);
    echo '<br>';
?>

<?php
    $name = "高橋さん";
    $limit_number = 50;
    printf("%sの残り時間はあと%dです", $name, $limit_number);
    echo '<br>';

    $name = "高野さん"; $limit_time = 30; $price = 10000; printf("%sはあと%d時間で%dの罰金です。", $name, $limit_time, $price);
    $limit_hour = 30;
    $limit_minute = 10;
    printf("残り%02d時間%02d分", $limit_hour, $limit_minute);
    echo '<br>';

    $limit_hour = 6;
    $limit_minute = 3;
    printf("残り%02d時間%02d分", $limit_hour, $limit_minute);
    echo '<br>';
?>

<?php
    $limit_hour = 5;
    $limit_minute = 5;
    sprintf("残り%02d時間%02d分", $limit_hour, $limit_minute);
    
    // sprintfだけでは出力までできない
    $limit_time = sprintf("残り%02d時間%02d分", $limit_hour, $limit_minute);
    echo $limit_time;
    echo '<br>';
?>
<?php
    echo "<br>";
    echo "1. PostgreSQL・Oracle SQL";
    echo "<br>";
    echo "PostgreSQL（ポストグレスキューエル）は、オープンソースのリレーショナルデータベース管理システム（RDBMS）です。Linux、macOSといったUNIX系OSはもちろんのこと、Windowsにも対応しています。";
    echo "<br>";
    echo "Oracle SQLとは、米国オラクル (Oracle) が開発・販売している、関係データベース管理システム (RDBMS) のことである。Oracle Databaseは世界初の商用RDBMSであり、メインフレームからパーソナルコンピュータまで、幅広いプラットフォームをサポートしている。";
    echo "<br>";
    echo "<br>";
    echo "2. TortoiseGit・TortoiseSVN";
    echo "<br>";
    echo "TortoiseGitは分散型バージョン管理システムである Git のクライアントで、TortoiseSVNをもとに、 Microsoft Windows シェル拡張 として実装されている。GNU General Public Licenseのもとに配布されているフリーソフトウェア である。";
    echo "<br>";
    echo "TortoiseSVNは、バージョン管理システムであるSubversionのクライアントフロントエンド。GNU General Public Licenseのもとに配布されているフリーソフトウェアである。";
    echo "<br>";
    echo "<br>";
    echo "3. 外部設計・内部設計";
    echo "<br>";
    echo "外部設計とは、ソフトウェアや情報システムの開発工程の一つで、外部から見たシステムの仕様を定義する工程。方法論の違いにより、この工程のことを「基本設計」あるいは「概要設計」などと呼んだり、これらの一部に含める場合もある。";
    echo "<br>";
    echo "内部設計とは、ソフトウェアや情報システムの開発工程の一つで、全体の構成や行うべき処理の詳細など実装に必要な仕様を定義する工程。方法論の違いにより、この工程を「機能設計」あるいは「詳細設計」と呼ぶ場合もある。";
    echo "<br>";
?>
