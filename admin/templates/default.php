<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $title;?></title>
    <link rel="stylesheet" href="/templates/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-toggleable-md navbar-inverse sticky-top bg-inverse">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="/">Profit PHP-2</a>
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
                    <a href="/admin/add/" class="btn btn-success">Добавить новость</a>
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
                        <?php foreach($news as $article): ?>
                        <tr>
                            <td><?php echo $article->id; ?></td>
                            <td><?php if(!empty($article->author_id)){ echo $article->author->name; } ?></td>
                            <td><?php echo $article->title; ?></td>
                            <td>
                                <a class="btn" href="read/?id=<?php echo $article->id; ?>">Подробнее</a>
                                <a class="btn btn-success" href="edit/?id=<?php echo $article->id; ?>">Редактировать</a>
                                <a class="btn btn-danger" href="delete/?id=<?php echo $article->id; ?>">Удалить</a>
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