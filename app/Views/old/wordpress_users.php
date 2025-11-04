<!DOCTYPE html>
<html>
<head>
    <title>WordPress Users</title>
</head>
<body>
    <h1>WordPress Users</h1>
    <ul>
        <?php foreach ($users as $user): ?>
            <li><?php echo $user['user_login']; ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
