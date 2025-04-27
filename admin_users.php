<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Utilisateurs - Administrateur</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body class="bg-gray-100">
<nav class="bg-blue-600 text-white p-4">
    <div class="container mx-auto flex justify-between">
        <h1 class="text-xl font-bold">Financia - Administrateur</h1>
        <div>
            <a href="admin_dashboard.php" class="mr-4 hover:underline">Retour</a>
            <a href="index.php" class="hover:underline">Déconnexion</a>
        </div>
    </div>
</nav>
<div class="container mx-auto p-6">
    <h2 class="text-2xl font-bold mb-6">Gestion des Utilisateurs</h2>
    <div class="bg-white p-6 rounded shadow">
        <h3 class="text-lg font-semibold mb-4">Liste des Utilisateurs</h3>
        <table class="w-full border">
            <thead>
            <tr class="bg-gray-200">
                <th class="p-2">Nom</th>
                <th class="p-2">Rôle</th>
                <th class="p-2">Actions</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td class="p-2">Jean Dupont</td>
                <td class="p-2">Client</td>
                <td class="p-2">
                    <a href="#" class="text-blue-600 hover:underline">Modifier</a> |
                    <a href="#" class="text-red-600 hover:underline">Supprimer</a>
                </td>
            </tr>
            </tbody>
        </table>
        <h3 class="text-lg font-semibold mt-6 mb-4">Ajouter un Utilisateur</h3>
        <form action="admin_users.php" method="POST">
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700">Nom</label>
                <input type="text" id="name" name="name" class="mt-1 block w-full p-2 border rounded" required>
            </div>
            <div class="mb-4">
                <label for="role" class="block text-sm font-medium text-gray-700">Rôle</label>
                <select id="role" name="role" class="mt-1 block w-full p-2 border rounded" required>
                    <option value="client">Client</option>
                    <option value="teller">Guichetier</option>
                    <option value="admin">Administrateur</option>
                </select>
            </div>
            <button type="submit" class="bg-blue-600 text-white p-2 rounded hover:bg-blue-700">Ajouter</button>
        </form>
    </div>
</div>
<script src="js/scripts.js"></script>
</body>
</html>