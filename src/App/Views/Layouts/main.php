<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StackWrite</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-800"">

    <?php require __DIR__ . '/../Partials/header.php'; ?>

    <main>
        <?php require $view_file; ?>
    </main>

    <?php require __DIR__ . '/../Partials/footer.php'; ?>

</body>
</html>