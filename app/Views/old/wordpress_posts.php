<!DOCTYPE html>
<html>
<head>
    <title>WordPress Posts</title>
</head>
<body>
    <h1>WordPress Posts</h1>
    <ul>
        <?php foreach ($posts as $post): ?>
            <li><?php echo $post['post_title']; ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
