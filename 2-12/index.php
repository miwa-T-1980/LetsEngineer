<form action="result.php" method="post">
    
        お名前：<input type="text" name="my_name" /><br>
        ご希望商品：
        <input type="radio" name="prize" value="A賞">A賞
        <input type="radio" name="prize" value="B賞">B賞
        <input type="radio" name="prize" value="C賞">C賞
        <br>
        個数：
        <select name="items">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
        </select>
        <br>
        <input type="submit" value="申込" /><br>


    </form>
    <?php
    echo "モジュールとは、機能単位、交換可能な構成部分などを意味する英単語。;機器やシステムの一部を構成するひとまとまりの機能を持った部品で、";
    echo "<br>";
    echo "システム中核部や他の部品への接合部（インターフェース）の仕様が明確に定義され、容易に追加や交換ができるようなもののことを指す。";
    echo "<br>";
    echo "バージョン管理システムとは、ファイルに対して「誰が」「いつ」「何を変更したか」というような情報を記録することで、";
    echo "<br>";
    echo "過去のある時点の状態を復元したり変更内容の差分を表示できるようにするシステムのことです。";
    echo "<br>";
    echo "サブクエリとはSQLの中に書くSQLのことです。";
    ?>