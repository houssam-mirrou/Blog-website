<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StackWrite</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        /* Apply Font */
        body { font-family: 'Inter', sans-serif; }
        
        /* Dark Mode Scrollbar */
        ::-webkit-scrollbar {
            width: 10px;
        }
        ::-webkit-scrollbar-track {
            background: #0f172a; /* slate-900 */
        }
        ::-webkit-scrollbar-thumb {
            background: #334155; /* slate-700 */
            border-radius: 5px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #475569; /* slate-600 */
        }
    </style>
</head>
<body class="bg-slate-900 text-slate-300 font-sans antialiased selection:bg-blue-500 selection:text-white flex flex-col min-h-screen">

    <?php require __DIR__ . '/../Partials/header.php'; ?>

    <main class="flex-grow">
        <?php require $view_file; ?>
    </main>

    <?php require __DIR__ . '/../Partials/footer.php'; ?>

</body>
</html>