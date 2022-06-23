<!DOCTYPE html>
    <title>My Blog</title>
    <link rel="stylesheet" href="/app.css">
<body>
    <article>
        <h1>
            <?php echo $post->title; ?>
        </h1>
        <div>
            <?php echo $post->body; ?>
        </div>
        
    </article>

        <a href="/">Go Back</a>

</body>