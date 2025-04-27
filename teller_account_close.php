<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clôturer un Compte - Guichetier</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body class="bg-gray-100">
<nav class="bg-blue-600 text-white p-4">
    <div class="container mx-auto flex justify-between">
        <h1 class="text-xl font-bold">Financia - Guichetier</h1>
        <div>
            <a href="teller_dashboard.php" class="mr-4 hover:underline">Retour</a>
            <a href="index.php" class="hover:underline">Déconnexion</a>
        </div>
    </div>
</nav>
<div class="container mx-auto p-6">
    <h2 class="text-2xl font-bold mb-6">Clôturer un Compte</h2>
    <div class="bg-white p-6 rounded shadow">
        <form action="teller_account_close.php" method="POST">
            <div class="mb-4">
                <label for="account" class="block text-sm font-medium text-gray-700">Numéro de Compte</label>
                <input type="text" id="account" name="account" class="mt-1 block w-full p-2 border rounded" required>
            </div>
            <button type="submit" class="bg-red-600 text-white p-2 rounded hover:bg-red-700">Clôturer</button>
        </form>
    </div>
</div>
<script src="js/scripts.js"></script>
</body>
</html>