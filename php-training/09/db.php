<?php
// 環境変数の取得
$host = getenv("MY_MARIADB1_PORT_3306_TCP_ADDR");
$db   = getenv("MY_MARIADB1_ENV_MYSQL_DATABASE");
$user = getenv("MY_MARIADB1_ENV_MYSQL_USER");
$pass = getenv("MY_MARIADB1_ENV_MYSQL_PASSWORD");
 
// Mariadbへの接続
$link = mysql_connect($host, $user, $pass);
if (!$link) {
    die('接続失敗しました。。。'.mysql_error());
}
 
// データベースの選択
$con = mysql_select_db($db, $link);
if(!$con){
    die('データベース選択失敗です。'.mysql_error());
}
 
echo "接続成功しました！";
mysql_close($link);