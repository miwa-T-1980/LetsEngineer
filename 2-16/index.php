<?php
  $testFile = "test.txt";
  $contents = "こんにちは！";

  if (is_writable($testFile)) {

    echo "writable!!";

  } else {
      echo "not writable!";
      exit;
  }
  echo "<br>";
?>

<?php
  $testFile = "test.txt";
  $contents = "こんにちは！";

  if (is_writable($testFile)) {

    $fp = fopen($testFile, "a");

    fwrite($fp,$contents);

    fclose($fp);

    echo "finish writing!!";

  } else {

    echo "not writable!";

    exit;
  }

?>

<?php
  $test_file = "test2.txt";

  if (is_readable($test_file)) {

    $fp = fopen($test_file, "r");

    while ($line = fgets($fp)) {
        echo $line.'<br>';
    }

    fclose($fp);
  }else {

    echo "not readable!";
    exit;
  }
?>

<?php
echo "<br>";
echo "1.CakePHPの2系・3系の違い";
echo "<br>";
echo "CakePHP2はComposerでのインストールに対応していなかったことに対して、CakePHP3はComposerで簡単にインストールすることができるようになりました。";
echo "<br>";
echo "CakePHP2のQuelyBuilderでは多次元配列をつかい複雑だったものが、CakePHP3では簡単に使えるように変更されています。";
echo "<br>";
echo "<br>";
echo "2.LAMP";
echo "<br>";
echo "LAMPとは、オープンソースソフトウェアの組み合わせを指す言葉（略称）です。";
echo "<br>";
echo "具体的にはOSのLinux、WebサーバーのApache、データベースのMySQL、プログラミングのPerl、PHP、Pythonを指します。";
echo "<br>";
echo "<br>";
echo "3.AWS";
echo "<br>";
echo "AWSとはAmazon Web Servicesの略で、Amazonが提供している100以上のクラウドコンピューティングサービスの総称です。";
echo "<br>";
echo "クラウドコンピューティングとは、インターネットを介してサーバー・ストレージ・データベース・ソフトウェアといったコンピューターを使った様々なサービスを利用することを指します。";
echo "<br>";
?>