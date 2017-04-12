<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Top 3 News</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-inverse navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">Profit PHP-2</a>
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
    <div class="container">
        <div class="row">
            <?php foreach(App\Models\Article::findTopN(3) as $topNews): ?>
                <div class="col-md-4">
                    <h2><?php echo $topNews->id; ?> новость - <?php echo $topNews->title; ?></h2>
                    <p><?php echo $topNews->lead; ?></p>
                    <p><a class="btn btn-default" role="button" href="/article.php?id=<?php echo $topNews->id; ?>">Подробнее...&raquo;</a></p>
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