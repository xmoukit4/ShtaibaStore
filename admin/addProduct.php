<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">

<link rel="stylesheet" href="styles/addProduct.css">

<title>Document</title>
</head>

<body>

    <div class="container">
        <aside>
            <div class="top">
                <div class="logo">
                    <img src="../Assets/Logo.svg" alt="Logo">
                </div>
                <div class="close" id="closeBtn">
                    <span class="material-icons-sharp">
                        close
                    </span>

                </div>
            </div>
            <div class="side-bar">
                <button>
                    <span class="material-icons-sharp">
                        dashboard
                    </span>
                    <h3>Dashboard</h3>
                </button>
                <button class="active" onclick="loadProductsPage()">
                    <span class="material-icons-sharp">
                        inventory_2
                    </span>
                    <h3>Produits</h3>
                </button>
                <button onclick="loadGestionnairesPage()">
                    <span class="material-icons-sharp">
                        groups
                    </span>
                    <h3>Les Gestionnaires </h3>
                </button>
                <button onclick="loadCommandesPage()">
                    <span class="material-icons-sharp">
                        shopping_basket
                    </span>
                    <h3>Les Commandes</h3>
                </button>
                <button>
                    <span class="material-icons-sharp">
                        logout
                    </span>
                    <h3>Deconnection</h3>
                </button>
        </aside>
        <main>
            <h1>Ajouter Produit</h1>
            <form action="#">
                <div class="titre">
                    <label for="titreProduit">Titre Du Produit</label>
                    <input type="text" name="titreProduit" id="titreProduit" placeholder="Titre Produit">
                </div>

                <div class="categorie">
                    <label>Categorie</label>
                    <select name="categorie">
                        <option value="cat1">Categorie 1</option>
                        <option value="cat2">Categorie 2</option>
                        <option value="cat3">Categorie 3</option>
                        <option value="cat4">Categorie 4</option>
                    </select>

                </div>
                <div class="quantite">
                    <label for="quantiteProduit">Quantite</label>
                    <input type="text" name="quantiteProduit" id="quantiteProduit" placeholder="Quantite">
                </div>
                <div class="tailles">
                    <label>Tailles </label>
                    <div class="flextaille">
                    <label for="S">S</label>
                    <input type="checkbox" id="S" name="S" value="S">
                    
                    <label for="M">M</label>
                    <input type="checkbox" id="M" name="M" value="M">
                    <label for="L">L</label>
                    <input type="checkbox" id="L" name="L" value="L"></div>
                </div>
                
    <div class="description">
        <label for="descriptionProduit">Description</label>
        <textarea type="textarea" name="descriptionProduit" id="descriptionProduit" placeholder="Description" rows="8" cols="125"> </textarea>
    </div>
    <div class="uploadImages">
                <label>Images: </label>
                <input onchange="preview()" type="file" name="" id="file-input" accept="images/ png, image/jpeg" multiple>
                <label for="file-input" id="fileLabel">
                    Choisir les Photos
                </label>
                <p id="num-of-files">0 Photos</p>
                <div id="images"></div>
                </div>
    
    <div class="submit">
    <label for="submit" class="submitLabel">Submit</label>
    <div class="buttons">
    <input type="submit" id="submit" name="submit" value="Ajouter Produit">
    </div>
    </div>
    </form>
    </main>
    </div>
    <script src="js/redirections.js"></script>
    <script src="js/order.js"></script>
    <script src="js/script.js"></script>

</body>

</html>