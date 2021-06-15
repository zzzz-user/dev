<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document !</title>
</head>
<body>
<p>PHP!</p>

<p>
DB!
<?php
try {
    // TODO: テーブル作成
    $pdo = new PDO('mysql:host=mysql;dbname=mysql_database;', 'mysql_user', 'mysql_pw');
    $stmt = $pdo->prepare("select * from test_tbl where id = 1");
    $stmt->execute();
    $record = $stmt->fetch(PDO::FETCH_ASSOC);

    foreach ($record as $value) {
        var_dump($value);
    }

} catch (\Throwable $th) {
    echo $th->getMessage();
}
 ?>
</p>

<hr>

<?php
phpinfo();
?>

</body>
</html>