<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paramètres - Administrateur</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body class="bg-gray-100">
<nav class="bg-blue-600 text-white p Cinema 4">
    <div class="container mx-auto flex justify-between">
        <h1 class="text-xl font-bold">Financia - Administrateur</h1>
        <div>
            <a href="admin_dashboard.php" class="mr-4 hover:underline">Retour</a>
            <a href="index.php" class="hover:underline">Déconnexion</a>
        </div>
    </div>
</nav>
<div class="container mx-auto p-6">
    <h2 class="text-2xl font-bold mb-6">Paramètres du Système</h2>
    <div class="bg-white p-6 rounded shadow">
        <form action="admin_settings.php" method="POST">
            <div class="mb-4">
                <label for="notification" class="block text-sm font-medium text-gray-700">Activer les Notifications</label>
                <input type="checkbox" id="notification" name="notification" class="mt-1">
            </div>
            <div class="mb-4">
                <label for="threshold" class="block text-sm font-medium text-gray-700">Seuil de Transaction Suspecte (€)</label>
                <input type="number" id="threshold" name="threshold" class="mt-1 block w-full p-2 border rounded" value="10000">
            </div>
            <button type="submit" class="bg-blue-600 text-white p-2 rounded hover:bg-blue-700">Enregistrer</button>
        </form>
    </div>
</div>
<script src="js/scripts.js"></script>
</body>
</html>