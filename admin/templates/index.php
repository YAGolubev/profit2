<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Админка</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/index.php">Profit PHP-2</a>
            </div>
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <p class="navbar-btn">
                        <a href="/admin/" class="btn btn-success">Admin</a>
                    </p>
                </li>
            </ul>
        </div>
    </nav>
    <div class="jumbotron"></div>
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
                        <?php foreach(App\Models\Article::findAll() as $topNews): ?>
                        <tr>
                            <td><?php echo $topNews->id; ?></td>
                            <td><?php echo $topNews->author->name; ?></td>
                            <td><?php echo $topNews->title; ?></td>
                            <td>
                                <a class="btn" href="read.php?id=<?php echo $topNews->id; ?>">Подробнее</a>
                                <a class="btn btn-success" href="update.php?id=<?php echo $topNews->id; ?>">Редактировать</a>
                                <a class="btn btn-danger" href="delete.php?id=<?php echo $topNews->id; ?>">Удалить</a>
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