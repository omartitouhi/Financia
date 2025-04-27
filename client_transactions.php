<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transactions - Client</title>
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
    <h2 class="text-2xl font-bold mb-6">Effectuer une Transaction</h2>
    <div class="bg-white p-6 rounded shadow">
        <form action="client_transactions.php" method="POST">
            <div class="mb-4">
                <label for="type" class="block text-sm font-medium text-gray-700">Type de Transaction</label>
                <select id="type" name="type" class="mt-1 block w-full p-2 border rounded" required>
                    <option value="virement">Virement</option>
                    <option value="prelevement">Prélèvement</option>
                </select>
            </div>
            <div class="mb-4">
                <label for="amount" class="block text-sm font-medium text-gray-700">Montant (€)</label>
                <input type="number" id="amount" name="amount" step="0.01" class="mt-1 block w-full p-2 border rounded" required>
            </div>
            <div class="mb-4">
                <label for="recipient" class="block text-sm font-medium text-gray-700">Destinataire (IBAN)</label>
                <input type="text" id="recipient" name="recipient" class="mt-1 block w-full p-2 border rounded">
            </div>
            <button type="submit" class="bg-blue-600 text-white p-2 rounded hover:bg-blue-700">Exécuter</button>
        </form>
    </div>
    <div class="mt-6 bg-white p-6 rounded shadow">
        <h3 class="text-lg font-semibold mb-4">Catégorisation des Dépenses</h3>
        <p>Graphique des dépenses à venir ici (ex. alimentation, loisirs).</p>
    </div>
</div>
<script src="js/scripts.js"></script>
</body>
</html>