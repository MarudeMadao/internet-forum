<!DOCTYPE html>
<html lang = "ja">
    <head>
        <meta charset = "utf-8">
        <title>電子会議システム</title>
    </head>
    <body>
        <?php
            mb_internal_encoding("UTF-8");
            session_start();
            $id = $_SESSION["id"];

            include "db_connect.php";
            doDB();

            $sql = "delete from discussion where id='$id'";
            $query = mysqli_query($mysqli, $sql) or die("$id データを削除できませんでした");
            $message = "データを削除しました<br>";

            $_SESSION = array();
            session_destroy();   //sessionの破壊
            mysqli_close($mysqli);
        ?>
        
        <p>削除完了画面</p>
        <p><?php echo $message; ?></p>
        <p><a href="bbs_top.php">トップページへ</a></p>
        
    </body>
</html>