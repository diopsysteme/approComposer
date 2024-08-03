<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Approvisionnements</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

<div class="max-w-4xl w-full p-8 bg-white shadow-md rounded-lg">
    <h1 class="text-2xl font-bold mb-4 text-center">Liste des Approvisionnements</h1>
    <form method="post" class="mb-4" action="">
    <div class="flex flex-wrap gap-4">
        <div class="flex items-center">
            <label for="filterDate" class="mr-2 text-sm font-medium text-gray-700">Filtrer par date :</label>
            <input type="date" id="date" name="date" class="px-3 py-2 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" lang="fr">
        </div>
        <div class="flex items-center">
            <label for="telephone" class="mr-2 text-sm font-medium text-gray-700">Filtrer par numéro de téléphone :</label>
            <input type="text" id="telephone" name="telephone" class="px-3 py-2 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
        </div>
        <div class="flex items-center">
            <button type="submit" name="search" class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
                Filtrer
            </button>
        </div>
    </div>
</form>

    <div class="flex flex-col">
        <div class="flex flex-row gap-0 border-t border-b border-gray-200 bg-gray-100 font-bold">
            <div class="w-[69.9px] h-[59.3px] border-t border-b border-gray-200 bg-gray-100"></div>
            <div class="w-[149.9px] p-4 border-t border-b border-gray-200 bg-gray-100 box-sizing-border">
                <span class="text-[14px] leading-[1.571] text-[#171A1F]">Date</span>
            </div>
            <div class="w-[119.9px] p-4 border-t border-b border-gray-200 bg-gray-100 box-sizing-border">
                <span class="text-[14px] leading-[1.571] text-[#171A1F]">Montant</span>
            </div>
            <div class="w-[142.9px] p-4 border-t border-b border-gray-200 bg-gray-100 box-sizing-border">
                <span class="text-[14px] leading-[1.571] text-[#171A1F]">Client</span>
            </div>
            <div class="w-[142.9px] p-4 border-t border-b border-gray-200 bg-gray-100 box-sizing-border">
                <span class="text-[14px] leading-[1.571] text-[#171A1F]">Action</span>
            </div>
        </div>
        <?php if (!empty($appros)): ?>
            <?php foreach ($appros as $appro): ?>
                <div class="flex flex-row gap-0 border-t border-b border-gray-200 bg-white">
                    <div class="w-[69.9px] h-[59.3px] border-t border-b border-gray-200 bg-white"></div>
                    <div class="w-[149.9px] p-4 border-t border-b border-gray-200 bg-white box-sizing-border">
                        <span class="font-normal text-[14px] leading-[1.571] text-[#9095A0]">
                            <?php echo htmlspecialchars($appro['date']); ?>
                        </span>
                    </div>
                    <div class="w-[119.9px] p-4 border-t border-b border-gray-200 bg-white box-sizing-border">
                        <span class="font-normal text-[14px] leading-[1.571] text-[#171A1F]">
                            <?php echo htmlspecialchars($appro['montant']); ?>
                        </span>
                    </div>
                    <div class="w-[142.9px] p-4 border-t border-b border-gray-200 bg-white box-sizing-border">
                        <span class="font-normal text-[14px] leading-[1.571] text-[#171A1F]">
                            <?php echo htmlspecialchars($appro['client_name']); ?>
                        </span>
                    </div>
                    <div class="w-[142.9px] p-4 border-t border-b border-gray-200 bg-white box-sizing-border">
                       <a href="?details=<?=$appro['id']?>">
                       <button class="px-4 py-2 bg-blue-500 text-white rounded" >
                            Détails
                        </button>
                       </a>
                        
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p class="text-gray-500">Aucun approvisionnement trouvé.</p>
        <?php endif; ?>
    </div>

    <script>
        function viewDetails(id) {
            alert('Afficher les détails pour l\'approvisionnement ID: ' + id);
        }
    </script>
</div>

</body>
</html>
