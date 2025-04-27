<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion du Compte - Client</title>
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
    <h2 class="text-2xl font-bold mb-6">Gestion du Compte</h2>
    <div class="bg-white p-6 rounded shadow">
        <h3 class="text-lg font-semibold mb-4">Solde Actuel</h3>
        <p class="text-2xl font-bold text-green-600">5,000.00 €</p>
        <h3 class="text-lg font-semibold mt-6 mb-4">Historique des Transactions</h3>
        <table class="w-full border">
            <thead>
            <tr class="bg-gray-200">
                <th class="p-2">Date</th>
                <th class="p-2">Type</th>
                <th class="p-2">Montant</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td class="p-2">2025-04-25</td>
                <td class="p-2">Virement</td>
                <td class="p-2 text-red-600">-200.00 €</td>
            </tr>
            <tr>
                <td class="p-2">2025-04-24</td>
                <td class="p-2">Dépôt</td>
                <td class="p-2 text-green-600">+1,000.00 €</td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
<script src="js/scripts.js"></script>
</body>
</html>