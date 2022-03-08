<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp"
    rel="stylesheet">
    <link rel="stylesheet" href="products.css">
    
    <title>Produits</title>
</head>
<body>
<div class="container">
        <aside>
            <div class="top">
            <div class="logo">
                <img src="../Assets/Logo.png" alt="Logo">
            </div>
            <div class="close" id="closeBtn">
                <span class="material-icons-sharp">
                    close
                    </span>
                    
            </div>
        </div>
            <div class="side-bar">
                <button onclick="loadDashBoardPage()">
                    <span class="material-icons-sharp">
                        dashboard
                        </span>
                        <h3>Dashboard</h3>
                </button>
                <button class="active">
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
        

    <div class="right">
            <div class="top">
                <button id="menu-btn">
                    <span class="material-icons-sharp">
                        menu
                        </span>
                </button>
            </div>
            
            <div id="page">

            <div class="addProduct">
                <button class="button">Ajouter Produit</button>
                <button class="button1">Supprimer Produit</button>
        
            </div>

            <div class="recent-orders">
            <h2>Les Produits</h2>
            <table>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Num Produit</th>
                        <th>Nom Produit</th>
                        <th>Categorie</th>
                        <th>Stock</th>
                        <th>Prix</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                

            </div>

    </div>
    </div>
<script src="./redirections.js"></script>
<script src="./order.js"></script>
<script src="./products.js"></script>

</body>
</html>