<!DOCTYPE html>
    <title>My Blog</title>
    <link rel="stylesheet" href="/app.css">
<body>
    <?php foreach ($posts as $post) : ?>
        <article>
            <?php echo $post; ?>
        </article>
    <?php endforeach; ?>
</body>