<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp"
    rel="stylesheet">
    <link rel="stylesheet" href="styles/admin.css">
    <title>Document</title>
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
                <button onclick="loadProductsPage()">
                    <span class="material-icons-sharp">
                        inventory_2
                        </span>
                        <h3>Produits</h3>
                </button>
                <button class="active">
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
        
</div>
    </div>
<script src="js/redirections.js"></script>
<script src="js/productPage.js"></script>
</body>
</html>