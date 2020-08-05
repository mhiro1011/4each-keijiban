<?php

ini_set('display_errors', 1);
ini_set('error_reporting', E_ALL);


mb_internal_encoding("utf8");

$pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","root");
$stmt =$pdo->query("select * from 4each_keijiban");
while ($row = $stmt->fetch()){
    echo $row['handlename'];
    echo $row['title'];
    echo $row['comments'];
}

$pdo->exec("insert into 4each_keijiban(handlename,title,comments)values('".$_POST['handlename']."','".$_POST['title']."','".$_POST['comments']."');");

header("location:http://localhost:8888/4each_keijiban/index.php");
?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>お問い合わせ確認</title>
        <link rel="stylesheet" type="text/css" href="style2.css">
    </head>
    
    <body>
        <h1>お問い合わせフォーム</h1>
        <div class="main">
            <p>お問い合わせありがとうございました。</p>
        </div>
    </body>
</html>