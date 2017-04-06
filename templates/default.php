<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $title;?></title>
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
        <div class="row">
            <?php foreach($news as $article): ?>
                <div class="col-md-4">
                    <h2><?php echo $article->id; ?> - <?php echo $article->title; ?></h2>
                    <p><?php echo $article->lead; ?></p>
                    <?php if (!empty($article->author->id)): ?>
                        Автор: <?php echo $article->author->name; ?>
                    <?php endif; ?>
                    <p><a class="btn btn-default" role="button" href="/article.php?id=<?php echo $article->id; ?>">Подробнее...&raquo;</a></p>
                </div>
            <?php endforeach; ?>
        </div>
        <hr>
        <footer>
            <p>&copy; 2017</p>
        </footer>
    </div> <!-- /container -->
</body>
</html>