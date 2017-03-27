<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Top 3 News</title>
</head>
<body>
    <?php foreach(App\Models\Article::findTopN(3) as $topNews): ?>
        <h2>
            <?php echo $topNews->id; ?> новость - <?php echo $topNews->title; ?>
        </h2>
        <p>
            <?php echo $topNews->lead; ?>
            <a href="/article.php?id=<?php echo $topNews->id; ?>">Подробнее...</a>
        </p>
        <hr>
    <?php endforeach; ?>
</body>
</html>