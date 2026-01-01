<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title><?= isset($title) ? htmlspecialchars($title) : 'Mini MVC' ?></title>
</head>
<body>

    <?php require __DIR__ . '/../Partials/header.php'; ?>

    <main>
        <?php require $view_file; ?>
    </main>

    <?php require __DIR__ . '/../Partials/footer.php'; ?>

</body>
</html>