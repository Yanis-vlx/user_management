<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=  $title ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-4">
        <header>
            <nav>
                <a href="index.php"class="text-blue-500 hover:underline">
                    Utilisateur
                </a>
                <a href="form_Add.php"class="text-blue-500 hover:underline">
                    ajouter un utilisateur
                </a>
            </nav>
        </header>
        <main>
            <?php echo $content ?>
        </main>
    </div>
</body>
</html>