<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>復習課題</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    
    <body>  
        <header>
            <div class="header-logo">
                <img src="4eachblog_logo.jpg">
            </div>
            <div class="header-menu">
                <ul>
                    <li>トップ</li>
                    <li>プロフィール</li>
                    <li>4eachについて</li>
                    <li>登録フォーム</li>
                    <li>問い合わせ</li>
                    <li>その他</li>
                </ul>
            </div>
        </header>
        <main>
            <div class="left">
            <div class="keijiban">
            <h1>プログラミングに役立つ掲示板</h1>
            <div class="main2">
                <div class="main3">
                <form method="post" action="insert.php">
                <p>入力フォーム</p>
                <div>
                    <label>ハンドルネーム</label>
                    <br>
                    <input type="text" class="handlename" name="handlename" size="35">
                </div>
                <div>
                    <label>タイトル</label>
                    <br>
                    <input type="text" class="title" name="title" size="35">
                </div>
                <div>
                    <label>コメント</label>
                    <br>
                    <textarea class="comments" name="comments" cols="90" row="40">
                    </textarea>
                </div>
                <div>
                    <input type="submit" class="submit" value="送信する">
                </div>
                </form>
                </div>
            </div>
            <?php 
            
            mb_internal_encoding("utf8");

            $pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","root");
            $stmt =$pdo->query("select * from 4each_keijiban");
            
            while ($row = $stmt->fetch()){
                echo "<div class='kiji'>";
                echo "<h3>".$row['title']."</h3>";
                echo "<div class='contents'>";
                echo $row['comments'];
                echo "<div class='handlename'>posted by".$row['handlename']."</div>";
                echo "</div>";
                echo "</div>";
            }
            ?>
        </div>
                
                
            </div>                
            <div class="right">
                <div class="popular-artic">
                    <p>人気記事</p>
                    <ul>
                        <li>PHPオススメ本</li>
                        <li>PHP MyAdominの使い方</li>
                        <li>今人気のエディターTop5</li>
                        <li>HTMLの基礎</li>
                    </ul>
                </div>
                <div class="recomend">
                    <p>おすすめリンク</p>
                    <ul>
                        <li>インターノウス株式会社</li>
                        <li>XAMPPのダウンロード</li>
                        <li>Eclipsのダウンロード</li> 
                        <li>Bracketsのダウンロード</li> 
                    </ul>
                </div>
                <div class="category">
                    <p>カテゴリー</p>
                    <ul>
                        <li>HTML</li>
                        <li>PHP</li>
                        <li>MySQL</li>
                        <li>JavaScript</li>
                    </ul>
                </div>
            </div>
            
        </main>
        <footer>
            
            <p>
                copyright &copy internous | 4each blog the which provides A to Z about programing.
            </p>
            
        </footer>
    </body>