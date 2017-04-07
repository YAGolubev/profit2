<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $title;?></title>
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
    <div class="row">
        <?php foreach($news as $article): ?>
            <div class="col-md-4">
                <h2><?php echo $article->id; ?> - <?php echo $article->title; ?></h2>
                <p><?php echo $article->lead; ?></p>
                <?php if (!empty($article->author_id)): ?>
                    Автор: <?php echo $article->author->name; ?>
                <?php endif; ?>
                <p><a class="btn btn-default" role="button" href="/article.php?id=<?php echo $article->id; ?>">Подробнее...&raquo;</a></p>
            </div>
        <?php endforeach; ?>
    </div>
</div> <!-- /container -->
</body>
</html>