<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relevés Bancaires - Client</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body class="bg-gray-100">
<nav class="bg-blue-600 text-white p-4">
    <div class="container mx-auto flex justify-between">
        <h1 class="text-xl font-bold">Financia - Client</h1>
        <div>
            <a href="client_dashboard.php" class="mr-4 hover:underline">Retour</a>
            <a href="index.php" class="hover:underline">Déconnexion</a>
        </div>
    </div>
</nav>
<div class="container mx-auto p-6">
    <h2 class="text-2xl font-bold mb-6">Relevés Bancaires</h2>
    <div class="bg-white p-6 rounded shadow">
        <h3 class="text-lg font-semibold mb-4">Télécharger un Relevé</h3>
        <form action="client_statements.php" method="POST">
            <div class="mb-4">
                <label for="month" class="block text-sm font-medium text-gray-700">Mois</label>
                <select id="month" name="month" class="mt-1 block w-full p-2 border rounded" required>
                    <option value="2025-04">Avril 2025</option>
                    <option value="2025-03">Mars 2025</option>
                </select>
            </div>
            <div class="mb-4">
                <label for="format" class="block text-sm font-medium text-gray-700">Format</label>
                <select id="format" name="format" class="mt-1 block w-full p-2 border rounded" required>
                    <option value="pdf">PDF</option>
                    <option value="csv">CSV</option>
                    <option value="excel">Excel</option>
                </select>
            </div>
            <button type="submit" class="bg-blue-600 text-white p-2 rounded hover:bg-blue-700">Télécharger</button>
        </form>
    </div>
</div>
<script src="js/scripts.js"></script>
</body>
</html>