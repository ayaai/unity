<?php
    require_once('mysql_connect.php');//外部からの読み込み
    $pdo = connectDB();
    $res="";
    //POSTうけとり
   // $id = $_POST["id"]; //要求されてくるid 
    
    try {
        //今回ここではSELECT文を送信している。UPDATE、DELETEなどは、また少し記法が異なる。
        
        $stm = $pdo-> query("SELECT * FROM `unitylogin` where id=2");
        //foreach文でデータベースから取得したデータを１行ずつループ処理（連想配列で取得したデータのうち、１行文が$rouに格納される）
        foreach ($stm as $row) {    
            echo $row['id']."<br>";
            echo($row['name']."<br>");
            echo($row['password']."<br>");
        }
    //エラー処理　表示
    } catch (PDOException $e) {
        var_dump($e->getMessage());
    }
    
    $pdo = null;    //DB切断
    
    echo $res;  //unity に結果を返す
