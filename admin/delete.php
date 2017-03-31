<?php
/*
require 'database.php';
$id = 0;

if ( !empty($_GET['id'])) {
    $id = $_REQUEST['id'];
}

if ( !empty($_POST)) {
    // keep track post values
    $id = $_POST['id'];

    // delete data
    $pdo = Database::connect();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "DELETE FROM customers  WHERE id = ?";
    $q = $pdo->prepare($sql);
    $q->execute(array($id));
    Database::disconnect();
    header("Location: index.php");

}
*/
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Админка | Удаление</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="span10 offset1">
            <div class="row">
                <h3>Удаление новости</h3>
            </div>
            <form class="form-horizontal" action="delete.php" method="post">
                <input type="hidden" name="id" value="<?php echo $id;?>"/>
                <p class="alert alert-error">Точно удалить?</p>
                <div class="form-actions">
                    <button type="submit" class="btn btn-danger">Да</button>
                    <a class="btn" href="index.php">Нет</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>