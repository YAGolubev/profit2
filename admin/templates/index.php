<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Админка</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="col-md-12 col-lg-12">
            <div class="row">
                <h3>Администрирование статей</h3>
                <p>
                    <a href="/admin/create.php" class="btn btn-success">Добавить новость</a>
                </p>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Автор</th>
                            <th>Заголовок</th>
                            <th>Действия</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($news as $items): ?>
                        <tr>
                            <td><?php echo $items->id; ?></td>
                            <td><?php echo $items->author; ?></td>
                            <td><?php echo $items->title; ?></td>
                            <td>
                                <a class="btn" href="read.php?id=<?php echo $items->id; ?>">Подробнее</a>
                                <a class="btn btn-success" href="update.php?id=<?php echo $items->id; ?>">Редактировать</a>
                                <a class="btn btn-danger" href="delete.php?id=<?php echo $items->id; ?>">Удалить</a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div> <!-- row -->
        </div> <!-- col-* -->
    </div> <!-- container -->
</body>
</html>