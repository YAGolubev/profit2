<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Админка</title>
    <link rel="stylesheet" href="http://v4-alpha.getbootstrap.com/dist/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-toggleable-md navbar-inverse sticky-top bg-inverse">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="/index.php">Profit PHP-2</a>
        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="btn btn-success" href="/admin/">Admin</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container">
        <div class="col-md-12 col-lg-12">
            <div class="row">
                <h3>Администрирование статей</h3>
            </div>
            <div class="row">
                <p>
                    <a href="/admin/create.php" class="btn btn-success">Добавить новость</a>
                </p>
            </div>
            <div class="row">
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
                            <td><?php if(!empty($topNews->author_id)){ echo $topNews->author->name; } ?></td>
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