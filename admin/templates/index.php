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
                <h3>Таблица новостей</h3>
                <p>
                    <a href="/admin/create.php" class="btn btn-success">Добавить новость</a>
                </p>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Заголовок</th>
                            <th>Действия</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach(App\Models\Article::findAll() as $topNews): ?>
                        <tr>
                            <td><?php echo $topNews->id; ?></td>
                            <td><?php echo $topNews->title; ?></td>
                            <td>
                                <a class="btn" href="read.php?id='.$row['id'].'">Подробнее</a>
                                <a class="btn btn-success" href="update.php?id='.$row['id'].'">Редактировать</a>
                                <a class="btn btn-danger" href="delete.php?id='.$row['id'].'">Удалить</a>
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