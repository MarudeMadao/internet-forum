<!DOCTYPE html>
<html lang = "ja">
    <head>
        <meta charset = "utf-8">
        <title>電子会議システム</title>
    </head>
    <body>
        <?php
            mb_internal_encoding("UTF-8");

            if(isset($_GET["id"])){
                $id = $_GET["id"];
            }else{
                exit;
            }

            include "db_connect.php";
            doDB();

            $sql = "select * from discussion where (id = '$id')";
            $query = mysqli_query($mysqli, $sql) or die("fail");
            $data = mysqli_fetch_array($query);

            mysqli_close($mysqli);
        ?>

        <p>詳細画面表示</p>
        <table border="1">
            <tr>
                <td>名前</td>
                <td><?php echo $data["name"]; ?></td>
            </tr>
            <tr>
                <td>更新日時</td>
                <td><?php echo $data["modified"]; ?></td>
            </tr>
            <tr>
                <td>メッセージ</td>
                <td><?php echo $data["message"]; ?></td>
            </tr>
        </table>
    </body>
</html>