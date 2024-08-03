<!doctype html>
<html lang="en">
<?php
?>
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Group</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="<?=root2.'src/output.css'?>" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<?php 
// if($_SESSION)
// var_dump($_SESSION);
?>
<body>
    <div class="flex flex-row w-[1440px] box-sizing-border">
        <div class="shadow-[0px_0px_2px_0px_rgba(23,26,31,0.12),0px_0px_1px_0px_rgba(23,26,31,0.07)] bg-[#FFFFFF] flex flex-col p-[23.2px_24px_33px_18.4px] box-sizing-border">
            <div class="rounded-[4px] m-[0_0_39.3px_0] flex flex-row self-start w-[101.5px] box-sizing-border">
                <div class="m-[0_4.2px_0.6px_0] flex w-[11.6px] h-[29.9px] box-sizing-border">
                    <img class="w-[11.6px] h-[29.9px]" src="../assets/vectors/vector_16_x2.svg" />
                </div>
                <div class="m-[0_11px_0.6px_0] flex flex-col items-center w-[13.6px] box-sizing-border">
                    <div class="m-[0_0_2.7px_0] flex w-[13.6px] h-[13.6px] box-sizing-border">
                        <img class="w-[13.6px] h-[13.6px]" src="../assets/vectors/vector_20_x2.svg" />
                    </div>
                    <div class="flex w-[13.6px] h-[13.6px] box-sizing-border">
                        <img class="w-[13.6px] h-[13.6px]" src="../assets/vectors/vector_15_x2.svg" />
                    </div>
                </div>
                <div class="m-[4.3px_0.7px_7.4px_0] flex w-[10.6px] h-[18.8px] box-sizing-border">
                    <img class="w-[10.6px] h-[18.8px]" src="../assets/vectors/vector_23_x2.svg" />
                </div>
                <div class="m-[7.9px_1.5px_7.2px_0] flex w-[15.6px] h-[15.4px] box-sizing-border">
                    <img class="w-[15.6px] h-[15.4px]" src="../assets/vectors/vector_2_x2.svg" />
                </div>
                <div class="m-[7.9px_1.6px_0_0] flex w-[15.8px] h-[22.6px] box-sizing-border">
                    <img class="w-[15.8px] h-[22.6px]" src="../assets/vectors/vector_19_x2.svg" />
                </div>
                <div class="m-[7.9px_0_7.2px_0] flex w-[15.6px] h-[15.4px] box-sizing-border">
                    <img class="w-[15.6px] h-[15.4px]" src="../assets/vectors/vector_17_x2.svg" />
                </div>
            </div>
            <div class="m-[0_8.6px_22px_8.6px] inline-block self-start break-words font-['Open_Sans'] font-bold text-[14px] leading-[1.571] text-[#6E7787]">
                Working space
            </div>
            <div class="m-[0_0_30px_5.6px] flex flex-col w-[fit-content] box-sizing-border">
                <div class="rounded-[8px] bg-[#7D76CF] m-[0_0_26px_0] flex flex-row p-[8px_0_8px_16px] w-[240px] box-sizing-border">
                    <img class="m-[0_8px_0_0] w-[24px] h-[24px]" src="../assets/vectors/layout_11_x2.svg" />
                    <div class="m-[1px_0_1px_0] inline-block break-words font-['Manrope'] font-bold text-[14px] leading-[1.571] text-[#FFFFFF]">
                        Dashboard
                    </div>
                </div>
                <div class="rounded-[8px] m-[0_18.6px_34px_18.6px] flex flex-row self-start w-[fit-content] box-sizing-border">
                    <div class="m-[2.4px_10.6px_2.4px_0] flex w-[18.9px] h-[17.1px] box-sizing-border">
                        <img class="w-[18.9px] h-[17.1px]" src="../assets/vectors/vector_4_x2.svg" />
                    </div>
                    <span class="break-words font-['Manrope'] font-normal text-[14px] leading-[1.571] text-[#565E6C]">
                        Projects
                    </span>
                </div>
                <div class="rounded-[8px] m-[0_16px_34px_16px] flex flex-row self-start w-[fit-content] box-sizing-border">
                    <img class="m-[0_8px_0_0] w-[24px] h-[24px]" src="../assets/vectors/chart_pie_35_x2.svg" />
                    <div class="m-[1px_0_1px_0] inline-block break-words font-['Manrope'] font-normal text-[14px] leading-[1.571] text-[#565E6C]">
                        Analytics
                    </div>
                </div>
                <div class="rounded-[8px] m-[0_19.4px_0_19.4px] flex flex-row self-start w-[fit-content] box-sizing-border">
                    <div class="m-[5.9px_11.4px_5.9px_0] flex flex-row w-[17.1px] h-[fit-content] box-sizing-border">
                        <img class="m-[0_6.9px_0_0] w-[5.1px] h-[10.3px]" src="../assets/vectors/vector_21_x2.svg" />
                        <img class="w-[5.1px] h-[10.3px]" src="../assets/vectors/vector_22_x2.svg" />
                    </div>
                    <span class="break-words font-['Manrope'] font-normal text-[14px] leading-[1.571] text-[#565E6C]">
                        Integrations
                    </span>
                </div>
            </div>
            <div class="bg-[#F3F4F6] m-[0_5.6px_18px_5.6px] self-start w-[190px] h-[1px]">
            </div>
            <div class="m-[0_5.6px_24px_5.6px] inline-block self-start break-words font-['Open_Sans'] font-bold text-[14px] leading-[1.571] text-[#6E7787]">
                Personal
            </div>
            <div class="m-[0_0_664px_5.6px] flex flex-col self-center w-[fit-content] box-sizing-border">
                <div class="rounded-[8px] m-[0_0_33px_0] flex flex-row self-start w-[fit-content] box-sizing-border">
                    <img class="m-[0_8px_0_0] w-[24px] h-[24px]" src="../assets/vectors/meeting_x2.svg" />
                    <div class="m-[1px_0_1px_0] inline-block break-words font-['Manrope'] font-normal text-[14px] leading-[1.571] text-[#565E6C]">
                        Teams
                    </div>
                </div>
                <div class="rounded-[8px] m-[0_0_33px_0] flex flex-row self-start w-[fit-content] box-sizing-border">
                    <img class="m-[0_8px_0_0] w-[24px] h-[24px]" src="../assets/vectors/settings_13_x2.svg" />
                    <div class="m-[1px_0_1px_0] inline-block break-words font-['Manrope'] font-normal text-[14px] leading-[1.571] text-[#565E6C]">
                        Settings
                    </div>
                </div>
                <div class="rounded-[8px] flex flex-row self-start w-[fit-content] box-sizing-border">
                    <img class="m-[0_8px_0_0] w-[24px] h-[24px]" src="../assets/vectors/logout_x2.svg" />
                    <div class="m-[1px_0_1px_0] inline-block break-words font-['Manrope'] font-normal text-[14px] leading-[1.571] text-[#565E6C]">
                        Logout
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-col w-[1193px] box-sizing-border">
            <div class="shadow-[0px_0px_1px_0px_rgba(23,26,31,0.09),0px_4px_8px_0px_rgba(23,26,31,0.06)] bg-[#FFFFFF] flex flex-col p-[16px_40px_24px] self-center w-[1184px] h-[fit-content] box-sizing-border">
                <div class="m-[0_0_27px_1px] flex flex-row justify-between items-center self-start w-[1104px] box-sizing-border">
                    <div class="m-[0_4px_0_0] flex flex-row justify-between items-center h-[fit-content] box-sizing-border">
                        <div class="m-[0_24px_0_0] flex flex-row items-center h-[fit-content] box-sizing-border">
                            <div class="m-[0_0_0_1px] flex w-[fit-content] box-sizing-border">
                                <img class="w-[fit-content]" src="../assets/vectors/frame_39_x2.svg" />
                            </div>
                            <div class="m-[0_0_1px] flex flex-col w-[190px] h-[fit-content] box-sizing-border">
                                <span class="break-words font-['Manrope'] font-normal text-[12px] leading-[1.333] text-[#111928]">
                                    Projet M2 DSR
                                </span>
                                <span class="break-words font-['Manrope'] font-normal text-[10px] leading-[1.2] text-[#4B5563]">
                                    Créé le 03/12/2023
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Formulaire Nouvelle Dette -->
                <div class="container mx-auto mt-10 p-6 bg-white shadow-lg rounded-md">
                    <h1 class="text-2xl font-bold mb-6">Nouvelle Dette</h1>

                    <!-- Recherche de Client -->
                    <div class="mb-4">
                        <label for="client-search" class="block text-sm font-medium text-gray-700">Rechercher
                            Client</label>
                        <div class="flex">
                            <form action="?add" method="post">
                            <input type="text" id="client-search" class="block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Rechercher...">
                            <button name="search2" class="ml-2 px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">+</button>
                            </form>
                        </div>
                        <div id="client-info" class="bg-white shadow-md rounded p-4">
                        <input type="text"  id="client-search" class="block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="nom">
                        <input type="text" id="client-search" class="block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="prenom">
                        </div>
                    </div>

                    <!-- Recherche d'Articles -->
                    <div class="mb-4">
                        <label for="article-search" class="block text-sm font-medium text-gray-700">Rechercher
                            Articles</label>
                        <input type="text" id="article-search" class="block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Rechercher...">
                    </div>
                    <div id="article-info">

                    </div>
                    <!-- Quantité et Prix Unitaire -->
                    <div class="mb-4">
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label for="quantity" class="block text-sm font-medium text-gray-700">Quantité</label>
                                <input type="number" id="quantity" class="block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Quantité">
                            </div>
                            <div>
                                <label for="unit-price" class="block text-sm font-medium text-gray-700">Prix
                                    Unitaire</label>
                                <input type="number" id="unit-price" class="block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Prix Unitaire">
                            </div>
                        </div>
                    </div>

                    <!-- Bouton Ajouter -->
                    <div class="mb-4">
                        <button id="addToCart" class="px-4 py-2 bg-green-500 text-white rounded-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500  " >Ajouter au Panier</button>
                    </div>

                    <!-- Panier -->
                    <div class="mb-4">
                        <h2 class="text-xl font-semibold mb-2">Panier</h2>
                        <div id="cart" class="bg-gray-50 p-4 rounded-md shadow-inner">
                            <!-- Les articles ajoutés au panier apparaîtront ici -->
                        </div>
                    </div>

                    <!-- Bouton Enregistrer Dette -->
                    <div class="mt-6">
                        <button id="registerDebt" class="w-full px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 ">Enregistrer
                            Dette</button>
                    </div>
                </div>

                <script>
                    // document.getElementById('article-search').addEventListener('input', function() {
                    //     let articleSelected = this.value.trim() !== '';
                    //     document.getElementById('addToCart').disabled = !articleSelected;
                    // });

                    // document.getElementById('addToCart').addEventListener('click', function() {
                    //     let article = document.getElementById('article-search').value;
                    //     let quantity = document.getElementById('quantity').value;
                    //     let unitPrice = document.getElementById('unit-price').value;

                    //     if (article && quantity && unitPrice) {
                    //         let cart = document.getElementById('cart');
                    //         let newItem = document.createElement('div');
                    //         newItem.classList.add('mb-2', 'p-2', 'border', 'border-gray-300', 'rounded-md');
                    //         newItem.textContent = `${article} - Quantité: ${quantity} - Prix Unitaire: ${unitPrice}`;
                    //         cart.appendChild(newItem);

                    //         document.getElementById('article-search').value = '';
                    //         document.getElementById('quantity').value = '';
                    //         document.getElementById('unit-price').value = '';
                    //     }
                    // });
                </script>
            </div>
        </div>
    </div>
    <script src="<?='../../ressources/dist/exple.js'?>"></script>
    <style>
        .disabled {
            pointer-events: none;
            opacity: 0.5;
            cursor: not-allowed;
        }
    </style>
</body>

</html>