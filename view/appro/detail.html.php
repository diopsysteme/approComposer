<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Détails de l'approvisionnement</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

<div class="max-w-3xl mx-auto py-8">
    <h1 class="text-3xl font-bold text-center mb-6">Détails de l'approvisionnement</h1>

    <div class="bg-white shadow-md rounded-lg p-6 mb-6">
        <h2 class="text-xl font-semibold mb-4">Informations sur l'approvisionnement</h2>
        <p><strong>Date:</strong> <?php echo $appr['date']; ?></p>
        <p><strong>Montant:</strong> <?php echo $appr['montant']; ?></p>
        <p><strong>Client:</strong> <?php echo $appr['client_name']; ?></p>
    </div>

    <h2 class="text-xl font-semibold mb-4">Liste des produits</h2>
    <div class="bg-white shadow-md rounded-lg overflow-hidden mb-6">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Produit</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Quantité</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Prix unitaire</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                <?php foreach ($produit as $produi) : ?>
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap"><?php echo $produi['libelle']; ?></td>
                        <td class="px-6 py-4 whitespace-nowrap"><?php echo $produi['quantite']; ?></td>
                        <td class="px-6 py-4 whitespace-nowrap"><?php echo $produi['pu']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <a href="index.php" class="inline-block bg-green-500 text-white py-2 px-4 rounded-lg text-center">Retour</a>
</div>

</body>
</html>
