<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simulation Financière - Client</title>
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
    <h2 class="text-2xl font-bold mb-6">Simulation Financière</h2>
    <div class="bg-white p-6 rounded shadow">
        <h3 class="text-lg font-semibold mb-4">Simulateur de Prêt</h3>
        <form action="client_simulation.php" method="POST">
            <div class="mb-4">
                <label for="amount" class="block text-sm font-medium text-gray-700">Montant (€)</label>
                <input type="number" id="amount" name="amount" class="mt-1 block w-full p-2 border rounded" required>
            </div>
            <div class="mb-4">
                <label for="rate" class="block text-sm font-medium text-gray-700">Taux d'intérêt (%)</label>
                <input type="number" id="rate" name="rate" step="0.01" class="mt-1 block w-full p-2 border rounded" required>
            </div>
            <div class="mb-4">
                <label for="duration" class="block text-sm font-medium text-gray-700">Durée (mois)</label>
                <input type="number" id="duration" name="duration" class="mt-1 block w-full p-2 border rounded" required>
            </div>
            <button type="submit" class="bg-blue-600 text-white p-2 rounded hover:bg-blue-700">Calculer</button>
        </form>
        <div class="mt-6">
            <h3 class="text-lg font-semibold mb-4">Résultat</h3>
            <p>Mensualité estimée : <span id="result">0.00 €</span></p>
        </div>
    </div>
</div>
<script src="js/scripts.js"></script>
</body>
</html>