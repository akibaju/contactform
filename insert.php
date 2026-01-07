<?php

mb_internal_encoding("utf8");
$pdo = new PDO(dsn: "mysql:dbname=lesson1;host=localhost;", username: "root", password: "");

$sql = "INSERT INTO contactform(name, mail, age, comments) VALUES (?,?,?,?)";
$stmt = $pdo->prepare(query: $sql);

$stmt->bindValue(param: 1, value: $_POST['name']);
$stmt->bindValue(param: 2, value: $_POST['mail']);
$stmt->bindValue(param: 3, value: $_POST['age']);
$stmt->bindValue(param: 4, value: $_POST['comments']);

$stmt->execute();

?>

<!doctype HTML>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>お問い合わせフォームを作る</title>
    <link rel="stylesheet" type="text/css" href="style2.css">
</head>

<body>

    <h1>お問い合わせフォーム</h1>

    <div class="confirm">
        <p>
            お問い合わせ有難うございました。<br>3営業日以内に担当者よりご連絡差し上げます。
        </p>
    </div>

</body>

</html>