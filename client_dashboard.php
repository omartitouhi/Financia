<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de Bord - Client</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body class="bg-gray-100">
<nav class="bg-blue-600 text-white p-4">
    <div class="container mx-auto flex justify-between">
        <h1 class="text-xl font-bold">Financia - Client</h1>
        <a href="index.php" class="hover:underline">Déconnexion</a>
    </div>
</nav>
<div class="container mx-auto p-6">
    <h2 class="text-2xl font-bold mb-6">Tableau de Bord</h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <a href="client_account.php" class="bg-white p-6 rounded shadow hover:bg-gray-50">
            <h3 class="text-lg font-semibold">Gestion du Compte</h3>
            <p>Consulter le solde et l'historique</p>
        </a>
        <a href="client_transactions.php" class="bg-white p-6 rounded shadow hover:bg-gray-50">
            <h3 class="text-lg font-semibold">Transactions</h3>
            <p>Effectuer des virements et paiements</p>
        </a>
        <a href="client_statements.php" class="bg-white p-6 rounded shadow hover:bg-gray-50">
            <h3 class="text-lg font-semibold">Relevés</h3>
            <p>Télécharger des relevés bancaires</p>
        </a>
        <a href="client_loan.php" class="bg-white p-6 rounded shadow hover:bg-gray-50">
            <h3 class="text-lg font-semibold">Prêts</h3>
            <p>Demander un prêt</p>
        </a>
        <a href="client_simulation.php" class="bg-white p-6 rounded shadow hover:bg-gray-50">
            <h3 class="text-lg font-semibold">Simulation</h3>
            <p>Simuler épargne et prêts</p>
        </a>
    </div>
</div>
<script src="js/scripts.js"></script>
</body>
</html>