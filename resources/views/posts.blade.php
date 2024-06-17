<doctype html>

    <tite> Page posts</tite>
    <link rel="stylesheet" href="/app.css">

    <body>
        <?php foreach ($posts as $key => $post) : ?>

        <article>
            <?= $post; ?>
        </article>
        
        <?php endforeach; ?>
    </body>
