
async function fetchData(requestName: string, requestValue: string): Promise<any> {
    console.log(requestName + '  ' + requestValue);
    
    try {
        const response = await fetch('../../public/index.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({ [requestName]: requestValue })
        });

        if (!response.ok) {
            throw new Error('Network response was not ok');
        }

        const data = await response.json();
        return data;
    } catch (error) {
        console.error('Erreur lors de la requête fetch:', error);
        return null;
    }
}
function disabled(id:string) {
    document.getElementById(id)?.classList.add("disabled");
}
function enabled(id:string) {
    document.getElementById(id)?.classList.remove("disabled");
}
function setupSearch(inputElement: HTMLInputElement, requestName: string, resultElementId: string) {
    inputElement.addEventListener("input", async () => {
        let data;
        const minLength = requestName === "searchClient" ? 9 : 5;
        
        if (inputElement.value.length >= minLength) {
            data = await fetchData(requestName, inputElement.value);
            // console.log(data[requestName][0]);
            console.log("djfkdfk");
            
            if (data[requestName]){
                data= data[requestName]
                console.log(data.id);
                let desable:string ;
                let output = "";
                if (1) {
                    if(requestName=="searchClient"){
                        
                        output += `<table class="min-w-full bg-white">
                        <thead>
                            <tr>
                                <th class="py-2 px-4 border-b">Select</th>
                                <th class="py-2 px-4 border-b">Photo</th>
                                <th class="py-2 px-4 border-b">ID</th>
                                <th class="py-2 px-4 border-b">Nom</th>
                                <th class="py-2 px-4 border-b">Prénom</th>
                                <th class="py-2 px-4 border-b">Téléphone</th>
                            </tr>
                        </thead>
                        <tbody>`;
                    }else{
                        desable="hidden"
                        output += `<table class="min-w-full bg-white">
                                    <thead>
                                        <tr>
                                            <th class="py-2 px-4 border-b">Select</th>
                                            <th class="py-2 px-4 border-b">Photo</th>
                                            <th class="py-2 px-4 border-b">ID</th>
                                            <th class="py-2 px-4 border-b">Libelle</th>
                                            <th class="py-2 px-4 border-b">qtStoqk</th>
                                        </tr>
                                    </thead>
                                    <tbody>`;
                    }
                    
                    data.forEach((item: any) => {
                        output += `<tr>
                                        <td class="py-2 px-4 border-b">
                                            <input id="select-${requestName}" type="checkbox" name="select-${requestName}" value="${item.id}" class="checkbox">
                                        </td>
                                        <td class="py-2 px-4 border-b">
                                            <img src="${item.photo || '../../tof.png'}" alt="Photo de ${item.prenom || item.libelle} ${item.nom || ''}" class="w-12 h-12 rounded-full object-cover">
                                        </td>
                                        <td class="py-2 px-4 border-b">${item.id}</td>
                                        <td class="py-2 px-4 border-b ">${item.nom || item.libelle}</td>
                                        <td class="py-2 px-4 border-b ${desable}">${item.prenom || ''}</td>
                                        <td class="py-2 px-4 border-b">${item.telephone || item.qt_stock || ''}</td>
                                   </tr>`;
                    });
                    output += `</tbody></table>`;
                } else {
                    output = "Aucun résultat trouvé.";
                }
                document.getElementById(resultElementId)!.innerHTML = output;
                console.log(data);
                
                if (data){

                    let chekbox=document.querySelectorAll(".checkbox") as NodeListOf <HTMLInputElement>
                    console.log(chekbox.length);
                    
                    if (chekbox){
                        console.log(chekbox);
                        chekbox.forEach(chek=>{
                            chek.addEventListener("change",()=>{
                                if(chek.name=="select-searchArticle"){
                                    
                                }else{
                                    if(!chek.checked){
                                        formatDette.idclient=0;
                                    }else{
                                        formatDette.idclient=parseInt(chek.value,10);
                                    }
                                }
                                console.log();
                                
                                console.log(formatDette);
                                
                            })

                        })
                        
                    }else{
                        console.log("pas d'element de la classe checkbox");
                    }
                }
            }
        } else {
            document.getElementById(resultElementId)!.innerHTML = `Veuillez entrer une valeur valide`;
        }
    });
}

const searchClient = document.getElementById("client-search") as HTMLInputElement | null;
const searchArticle = document.getElementById("article-search") as HTMLInputElement | null;
console.log(searchArticle)
console.log(searchClient);


if (searchClient !== null) {
    setupSearch(searchClient, "searchClient", 'client-info');
} else {
    console.log("Element #client-search not found.");
}

if (searchArticle !== null) {
    setupSearch(searchArticle, "searchArticle", 'article-info');
} else {
    console.log("Element #article-search not found.");
}
let addToCart = document.getElementById("addToCart");
let registerDebt = document.getElementById("registerDebt");

if (addToCart !== null) {
    addToCart.addEventListener("click", () => {
        let chekbox=document.querySelectorAll(".checkbox") as NodeListOf <HTMLInputElement>
        let quantity = document.getElementById('quantity') as HTMLInputElement
        let unitPrice = document.getElementById('unit-price') as HTMLInputElement
        let art = document.getElementById('article-search') as HTMLInputElement
        alert(art.value)
        if (chekbox){
            chekbox.forEach(chek=>{
                
                if(chek.name=="select-searchArticle"){
                    // alert(chek.name +chek.checked+quantity.value+unitPrice.value)
                    console.log(chek.name,quantity.value,unitPrice.value,art.value);
                    if(chek.checked&&quantity.value&&unitPrice.value){
                        let article = {
                            id:parseInt(chek.value,10),
                            quantity:parseInt(quantity.value,10),
                            unitPrice:parseInt(unitPrice.value,10),
                            libelle:art.value
                        }
                        addToCartF(article)
                    }
                }
            })
            
        }else{
            console.log("pas d'element de la classe checkbox");
        }
    });
}
interface Article {
    id: number;
    quantity: number;
    unitPrice: number;
    libelle: string;
  }
  
  interface Dette {
    idclient: number;
    idVendeur: number;
    articles: Article[];
  }
  
  const formatDette: Dette = {
    idclient: 0,
    idVendeur: 4,
    articles: []
  };
  
  function addToCartF(article: Article): void {
    const cart = document.getElementById('cart');
    console.log(cart);
    
    if (!cart) return;
  
    const newItem = document.createElement('div');
    newItem.classList.add('mb-2', 'p-2', 'border', 'border-gray-300', 'rounded-md', 'flex', 'justify-between', 'items-center');
    newItem.setAttribute('data-article-id', article.id.toString());
  
    const itemContent = document.createElement('span');
    itemContent.textContent = `${article.libelle} - Quantité: ${article.quantity} - Prix Unitaire: ${article.unitPrice}`;
    newItem.appendChild(itemContent);
  
    const deleteButton = document.createElement('button');
    deleteButton.textContent = 'Supprimer';
    deleteButton.classList.add('ml-4', 'bg-red-500', 'text-white', 'px-2', 'py-1', 'rounded');
    deleteButton.onclick = () => {
      cart.removeChild(newItem);
      removeFromDette(article.id);
    };
    newItem.appendChild(deleteButton);
  
    cart.appendChild(newItem);
  
    formatDette.articles.push(article);
    console.log(formatDette); // For debugging purposes
    clearInputFields();
  }
  
  function clearInputFields(): void {
    
    (document.getElementById('quantity') as HTMLInputElement).value = '';
    (document.getElementById('unit-price') as HTMLInputElement).value = '';
  }
  
  function removeFromDette(articleId: number): void {
    formatDette.articles = formatDette.articles.filter(article => article.id !== articleId);
    console.log(formatDette); // For debugging purposes
  }
  registerDebt?.addEventListener("click", () =>{
    console.log(formatDette);
    if(formatDette.articles.length>0 && formatDette.idclient!=0){
      registerDebtF(formatDette)
    }else{
      alert("Veuillez ajouter des articles à la dette")
    }
  })
  async function registerDebtF(debtData: Omit<Dette, 'montant'>): Promise<void> {
    // Calculer le montant total
    const totalAmount = debtData.articles.reduce((sum, article) => {
        return sum + (article.quantity * article.unitPrice);
    }, 0);

    const requestData = {
        requestName: 'registerDebt', // Nom de la requête
        debtData: {
            ...debtData,
            montant: totalAmount // Ajouter le montant calculé
        }
    };

    try {
        const response = await fetch('../../public/index.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify(requestData)
        });

        // Vérifier et afficher le texte brut de la réponse pour le débogage
        const responseText = await response.text();
        console.log('Response text:', responseText);

        // Tenter d'analyser la réponse JSON
        const result = JSON.parse(responseText);
        console.log(result); // Pour le débogage

        if (!response.ok) {
            throw new Error('Network response was not ok');
        }

        alert('La dette a été enregistrée avec succès.');
        formatDette.articles = []; // Réinitialiser les articles
        (document.getElementById('cart') as HTMLElement).innerHTML = ''; // Vider le panier
    } catch (error) {
        console.error('Il y a eu un problème avec l\'opération fetch:', error);
        alert('Une erreur est survenue lors de l\'enregistrement de la dette.');
    }
}