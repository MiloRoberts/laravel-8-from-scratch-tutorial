<!DOCTYPE html>
    <title>My Blog</title>
    <link rel="stylesheet" href="/app.css">
<body>
    <?php foreach ($posts as $post) : ?>
        <article>
            <h1>
                <a href="/posts/<?php echo $post->slug; ?>">
                    <?php echo $post->title; ?>
                </a>
            </h1>
            <div>
                <?php echo $post->excerpt;
                ?>
            </div>           
        </article>
    <?php endforeach; ?>
</body>