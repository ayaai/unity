<?php

//PDO MySQL接続
function connectDB(){
    

//ユーザ名やDBアドレスの定義
    $dsn = 'mysql:dbname=login;host=localhost;port=3306;charaset=utf-8';//データベース名とホスト名
    $username = 'root';//データベースのユーザー名
    $password = '';//データベースのパスワード

    try {
        //ＰＤＯの設定（ドメイン、ユーザー名、パスワード）
        $pdo = new PDO($dsn,$username,$password);
        //プリペアードステートメントのエミュレーションを無効化
        $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
        //例外がスローされる設定にする
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        echo("接続できたよん"."<br>");
     //エラー処理 
    } catch (PDOException $e) {
        //メッセージを表示して終了
        exit('' . $e->getMessage());
    }
   /* try{
        $stm = $pdo->query("select * from `unitylogin`");
        foreach( $stm as $row){
            echo($row);
        }
    } catch(PDOException $e){
        var_dump(($e->getMessage()));
    }*/
        return $pdo;
}
